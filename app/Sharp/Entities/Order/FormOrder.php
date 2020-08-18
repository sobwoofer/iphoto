<?php

namespace App\Sharp\Entities\Order;

use App\Eloquent\Order;
use App\Eloquent\Service;
use App\Eloquent\Tag;
use Code16\Sharp\Form\Eloquent\WithSharpFormEloquentUpdater;
use Code16\Sharp\Form\Fields\SharpFormAutocompleteField;
use Code16\Sharp\Form\Fields\SharpFormMarkdownField;
use Code16\Sharp\Form\Fields\SharpFormNumberField;
use Code16\Sharp\Form\Fields\SharpFormSelectField;
use Code16\Sharp\Form\Fields\SharpFormTagsField;
use Code16\Sharp\Form\Fields\SharpFormTextareaField;
use Code16\Sharp\Form\Fields\SharpFormTextField;
use Code16\Sharp\Form\Fields\SharpFormUploadField;
use Code16\Sharp\Form\Layout\FormLayoutColumn;
use Code16\Sharp\Form\SharpForm;

class FormOrder extends SharpForm
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
            Order::with('service')->findOrFail($id)
        );
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed the instance id
     */
    public function update($id, array $data)
    {
        $order = $id ? Order::findOrFail($id) : new Order;
        $this->save($order, $data);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        Order::findOrFail($id)->find($id)->delete();
    }

    /**
     * Build form fields using ->addField()
     *
     * @return void
     */
    public function buildFormFields()
    {
        $this->addField(
            SharpFormTextField::make('first_name')
                ->setLabel('First Name')
        )->addField(
            SharpFormTextField::make('phone')
                ->setLabel('Phone')
        )->addField(
            SharpFormTextField::make('email')
                ->setLabel('Email')
        )->addField(
            SharpFormTextareaField::make('message')
                ->setLabel('Message')
        )->addField(
            SharpFormTextField::make('service_name')
                ->setLabel('Service Name')
        )->addField(
            SharpFormNumberField::make('price')
                ->setLabel('Price')
        )->addField(
            SharpFormAutocompleteField::make('service_id', 'local')
                ->setLabel('Service')
//                ->setLocalSearchKeys(['title'])
                ->setListItemTemplatePath('/sharp/templates/service_list.vue')
                ->setResultItemTemplatePath('/sharp/templates/service_result.vue')
                ->setLocalValues(
//                    [['title'=> 'as', 'id' => 1]]
                    Service::orderBy('title')->get()->pluck('title', 'id')->all()
                )
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
            $column->withSingleField('first_name');
            $column->withSingleField('phone');
            $column->withSingleField('email');
            $column->withSingleField('message');
            $column->withSingleField('service_name');
            $column->withSingleField('price');
            $column->withSingleField('service_id');
        });
    }
}
