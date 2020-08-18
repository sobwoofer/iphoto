<?php

namespace App\Sharp\Post;

use Code16\Sharp\EntityList\Eloquent\Transformers\SharpUploadModelAttributeTransformer;
use Code16\Sharp\Show\Fields\SharpShowEntityListField;
use Code16\Sharp\Show\Fields\SharpShowTextField;
use Code16\Sharp\Show\Layout\ShowLayoutColumn;
use Code16\Sharp\Show\Layout\ShowLayoutSection;
use Code16\Sharp\Show\SharpShow;
use App\Eloquent\Post;
use Code16\Sharp\Utils\Transformers\Attributes\MarkdownAttributeTransformer;

class ShowPost extends SharpShow
{
    /**
     * Retrieve a Model for the form and pack all its data as JSON.
     *
     * @param $id
     * @return array
     */
    public function find($id): array
    {
        // Replace/complete this code
        $photo = Post::with('cover')->findOrFail($id);

        $this->setCustomTransformer(
            'cover',
            new SharpUploadModelAttributeTransformer(600)
        );

        $this->setCustomTransformer('description', new MarkdownAttributeTransformer());

        return $this->transform($photo);
    }

    /**
     * Build show fields using ->addField()
     *
     * @return void
     */
    public function buildShowFields()
    {
         $this->addField(
             SharpShowTextField::make('id')
                 ->setLabel('Id:')
         )->addField(
            SharpShowTextField::make('title')
                ->setLabel('Title:')
        )->addField(
             SharpShowTextField::make('description')
                 ->setLabel('Description:')
                ->collapseToWordCount(20)
         )->addField(
             SharpShowTextField::make('cover')
         )->addField(
             SharpShowTextField::make('created_at')
                 ->setLabel('Created At:')
         )->addField(
             SharpShowTextField::make('updated_at')
                 ->setLabel('Updated At:')
         )->addField(
             SharpShowEntityListField::make('tags', 'post_tag')
                 ->hideFilterWithValue('post', function($instanceId) {
                     return $instanceId;
                 })
                 ->showEntityState(false)
                 ->showReorderButton(true)
                 ->showCreateButton()
         );
    }


    /**
     * Build show layout using ->addTab() or ->addColumn()
     *
     * @return void
     */
    public function buildShowLayout()
    {
         $this->addSection('Main', function(ShowLayoutSection $section) {
              $section->addColumn(6, function(ShowLayoutColumn $column) {
                  $column->withSingleField('id');
                  $column->withSingleField('title');
                  $column->withSingleField('description');
                  $column->withSingleField('created_at');
                  $column->withSingleField('updated_at');
              });
         })->addSection('Image', function(ShowLayoutSection $section) {
             $section->addColumn(6, function(ShowLayoutColumn $column) {
                 $column->withSingleField('cover');
             });
         })->addEntityListSection('tags');
    }

    function buildShowConfig()
    {
        //
    }
}
