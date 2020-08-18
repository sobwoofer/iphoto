<?php

namespace App\Sharp\Entities\Order;

use App\Eloquent\Order;
use Code16\Sharp\Show\Fields\SharpShowEntityListField;
use Code16\Sharp\Show\Fields\SharpShowTextField;
use Code16\Sharp\Show\Layout\ShowLayoutColumn;
use Code16\Sharp\Show\Layout\ShowLayoutSection;
use Code16\Sharp\Show\SharpShow;

class ShowOrder extends SharpShow
{
    /**
     * Retrieve a Model for the form and pack all its data as JSON.
     *
     * @param $id
     * @return array
     */
    public function find($id): array
    {
        $entity = Order::with('service')->findOrFail($id);
        // Replace/complete this code

        return $this->transform($entity);
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
            SharpShowTextField::make('first_name')
                ->setLabel('First Name:')
        )->addField(
            SharpShowTextField::make('phone')
                ->setLabel('Phone:')
        )->addField(
            SharpShowTextField::make('email')
                ->setLabel('Email:')
        )->addField(
            SharpShowTextField::make('service_name')
                ->setLabel('Service Name:')
        )->addField(
            SharpShowTextField::make('price')
                ->setLabel('Price:')
        )->addField(
            SharpShowTextField::make('service_id')
                ->setLabel('Service Id:')
        )->addField(
            SharpShowTextField::make('message')
                ->setLabel('Message:')
                ->collapseToWordCount(20)
        )->addField(
            SharpShowTextField::make('created_at')
                ->setLabel('Created At:')
        )->addField(
            SharpShowTextField::make('updated_at')
                ->setLabel('Updated At:')
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
                  $column->withSingleField('first_name');
                  $column->withSingleField('phone');
                  $column->withSingleField('email');
                  $column->withSingleField('message');
                  $column->withSingleField('service_name');
                  $column->withSingleField('price');
                  $column->withSingleField('service_id');
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
