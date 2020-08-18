<?php

namespace App\Sharp\Tag;

use App\Eloquent\Tag;
use Code16\Sharp\Form\Eloquent\WithSharpFormEloquentUpdater;
use Code16\Sharp\Form\Fields\SharpFormTextField;
use Code16\Sharp\Form\Layout\FormLayoutColumn;
use Code16\Sharp\Form\SharpForm;
use Code16\Sharp\Show\Fields\SharpShowTextField;

class FormTag extends SharpForm
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
        return $this->transform(
            Tag::findOrFail($id)
        );
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed the instance id
     */
    public function update($id, array $data)
    {
        $tag = $id ? Tag::findOrFail($id) : new Tag;
        $this->save($tag, $data);
    }

    /**
     * @param $id
     * @throws \Exception
     */
    public function delete($id): void
    {
        Tag::findOrFail($id)->find($id)->delete();
    }

    /**
     * Build form fields using ->addField()
     *
     * @return void
     */
    public function buildFormFields()
    {
        $this->addField(
            SharpFormTextField::make('tag')
                ->setLabel('Tag')
        )->addField(
            SharpFormTextField::make('label')
                ->setLabel('Label')
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
            $column->withSingleField('tag');
        })->addColumn(6, function(FormLayoutColumn $column) {
            $column->withSingleField('label');
        });
    }
}
