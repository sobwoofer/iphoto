<?php

namespace App\Sharp\Order;

use App\Eloquent\Order;
use Code16\Sharp\Form\Eloquent\WithSharpFormEloquentUpdater;
use Code16\Sharp\Form\Fields\SharpFormTextField;
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
            Order::findOrFail($id)
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
            SharpFormTextField::make('name')
                ->setLabel('Name')
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
            $column->withSingleField('name');
        });
    }
}
