<?php

namespace App\Sharp\Tag;

use App\Eloquent\Tag;
use Code16\Sharp\Show\Fields\SharpShowTextField;
use Code16\Sharp\Show\Layout\ShowLayoutColumn;
use Code16\Sharp\Show\Layout\ShowLayoutSection;
use Code16\Sharp\Show\SharpShow;

class ShowTag extends SharpShow
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
        $tag = Tag::findOrFail($id);

        return $this->transform($tag);
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
                ->setLabel('Id')
            )->addField(
             SharpShowTextField::make('tag')
                 ->setLabel('Tag')
            )->addField(
             SharpShowTextField::make('label')
                 ->setLabel('Label')
            )->addField(
             SharpShowTextField::make('created_at')
                 ->setLabel('Crated At')
            )->addField(
             SharpShowTextField::make('updated_at')
                 ->setLabel('Updated At')
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
                  $column->withSingleField('tag');
                  $column->withSingleField('label');
                  $column->withSingleField('created_at');
                  $column->withSingleField('updated_at');
              });
         });
    }

    function buildShowConfig()
    {
        //
    }
}
