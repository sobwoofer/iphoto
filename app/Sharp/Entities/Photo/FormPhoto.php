<?php

namespace App\Sharp\Entities\Photo;

use App\Eloquent\Photo;
use App\Eloquent\Post;
use App\Eloquent\Tag;
use Code16\Sharp\Form\Eloquent\Transformers\FormUploadModelTransformer;
use Code16\Sharp\Form\Eloquent\Uploads\Transformers\SharpUploadModelFormAttributeTransformer;
use Code16\Sharp\Form\Eloquent\WithSharpFormEloquentUpdater;
use Code16\Sharp\Form\Fields\SharpFormTagsField;
use Code16\Sharp\Form\Fields\SharpFormTextField;
use Code16\Sharp\Form\Fields\SharpFormUploadField;
use Code16\Sharp\Form\Layout\FormLayoutColumn;
use Code16\Sharp\Form\SharpForm;

class FormPhoto extends SharpForm
{
    use WithSharpFormEloquentUpdater;

    /**
     * Retrieve a Model for the form and pack all its data as JSON.
     *
     * @param $id
     * @return array
     */
    public function find($id): array
    {
        return $this->setCustomTransformer(
            'cover',
            new SharpUploadModelFormAttributeTransformer()
        )->transform(
            Photo::with('cover', 'tags')->findOrFail($id)
        );
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed the instance id
     */
    public function update($id, array $data)
    {
        $photo = $id ? Photo::findOrFail($id) : new Photo;
        $this->save($photo, $data);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        Photo::findOrFail($id)->find($id)->delete();
    }

    /**
     * Build form fields using ->addField()
     *
     * @return void
     */
    public function buildFormFields()
    {
        $this->addField(
            SharpFormTextField::make('title')
                ->setLabel('Title')
        )->addField(
            SharpFormUploadField::make('cover')
                ->setLabel('Photo')
                ->setFileFilterImages()
//                ->setCropRatio('1:1')
                ->setStorageBasePath('data/photo')
        )->addField(
            SharpFormTagsField::make('tags',
                Tag::orderBy('label')->get()->pluck('label', 'id')->all()
            )->setLabel('Tags')
                ->setCreatable(true)
                ->setCreateAttribute('name')
                ->setMaxTagCount(4)

        );
    }

    /**
     * Build form layout using ->addTab() or ->addColumn()
     *
     * @return void
     */
    public function buildFormLayout()
    {
        $this->addColumn(6, function(FormLayoutColumn $column) {
            $column->withSingleField('title');
        })->addColumn(6, function(FormLayoutColumn $column) {
            $column->withSingleField('cover');
            $column->withSingleField('tags');
        });
    }
}
