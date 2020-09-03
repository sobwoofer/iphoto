<?php

namespace App\Sharp\Entities\Photo;

use App\Eloquent\Photo;
use Code16\Sharp\EntityList\Eloquent\Transformers\SharpUploadModelAttributeTransformer;
use Code16\Sharp\Show\Fields\SharpShowEntityListField;
use Code16\Sharp\Show\Fields\SharpShowTextField;
use Code16\Sharp\Show\Layout\ShowLayoutColumn;
use Code16\Sharp\Show\Layout\ShowLayoutSection;
use Code16\Sharp\Show\SharpShow;

class ShowPhoto extends SharpShow
{
    /**
     * Retrieve a Model for the form and pack all its data as JSON.
     *
     * @param $id
     * @return array
     */
    public function find($id): array
    {
        $photo = Photo::with('cover')->findOrFail($id);
        // Replace/complete this code
        $this->setCustomTransformer('cover', new SharpUploadModelAttributeTransformer(600));

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
             SharpShowTextField::make('cover')
         )->addField(
             SharpShowTextField::make('created_at')
                 ->setLabel('Created At:')
         )->addField(
             SharpShowTextField::make('updated_at')
                 ->setLabel('Updated At:')
         )->addField(
             SharpShowEntityListField::make('tags', 'tag')
                 ->hideFilterWithValue('photo', function($instanceId) {
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
         $this->addSection('Section', function(ShowLayoutSection $section) {
              $section->addColumn(6, function(ShowLayoutColumn $column) {
                  $column->withSingleField('id');
                  $column->withSingleField('title');
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
