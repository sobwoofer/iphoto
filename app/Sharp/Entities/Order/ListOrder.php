<?php

namespace App\Sharp\Entities\Order;

use App\Eloquent\Order;
use Code16\Sharp\EntityList\Containers\EntityListDataContainer;
use Code16\Sharp\EntityList\EntityListQueryParams;
use Code16\Sharp\EntityList\SharpEntityList;

class ListOrder extends SharpEntityList
{
    /**
    * Build list containers using ->addDataContainer()
    *
    * @return void
    */
    public function buildListDataContainers()
    {
        $this->addDataContainer(
            EntityListDataContainer::make('id')
                ->setLabel('Id')
                ->setSortable()
        )->addDataContainer(
            EntityListDataContainer::make('first_name')
                ->setLabel('First Name')
                ->setSortable()
        )->addDataContainer(
            EntityListDataContainer::make('phone')
                ->setLabel('Phone')
                ->setSortable()
        )->addDataContainer(
            EntityListDataContainer::make('email')
                ->setLabel('Email')
                ->setSortable()
        )->addDataContainer(
            EntityListDataContainer::make('service_name')
                ->setLabel('Service Name')
                ->setSortable()
        )->addDataContainer(
            EntityListDataContainer::make('created_at')
                ->setLabel('Created At')
                ->setSortable()
        );
    }

    /**
    * Build list layout using ->addColumn()
    *
    * @return void
    */

    public function buildListLayout()
    {
        $this->addColumn('id', 1);
        $this->addColumn('first_name', 2);
        $this->addColumn('phone', 2);
        $this->addColumn('email', 2);
        $this->addColumn('service_name', 2);
        $this->addColumn('created_at', 2);
    }

    /**
    * Build list config
    *
    * @return void
    */
    public function buildListConfig()
    {
        $this->setInstanceIdAttribute('id')
            ->setSearchable()
            ->setDefaultSort('name', 'asc')
            ->setPaginated();
    }

    /**
    * Retrieve all rows data as array.
    *
    * @param EntityListQueryParams $params
    * @return array
    */
    public function getListData(EntityListQueryParams $params)
    {
        return $this->transform(Order::all());
    }
}
