<?php

namespace App\Sharp\Entities\Service;

use App\Eloquent\Service;
use App\Sharp\Filters\TagServiceFilter;
use Code16\Sharp\EntityList\Containers\EntityListDataContainer;
use Code16\Sharp\EntityList\Eloquent\Transformers\SharpUploadModelAttributeTransformer;
use Code16\Sharp\EntityList\EntityListQueryParams;
use Code16\Sharp\EntityList\SharpEntityList;
use Code16\Sharp\Utils\LinkToEntity;

class ListService extends SharpEntityList
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
            EntityListDataContainer::make('cover')
        )->addDataContainer(
            EntityListDataContainer::make('tags')
                ->setLabel('Tags')
                ->setHtml()
        )->addDataContainer(
            EntityListDataContainer::make('title')
                ->setLabel('Title')
                ->setSortable()
        )->addDataContainer(
            EntityListDataContainer::make('created_at')
                ->setLabel('Created At')
                ->setSortable()
        )->addDataContainer(
            EntityListDataContainer::make('updated_at')
                ->setLabel('Updated At')
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
        $this->addColumn('id', 1)
            ->addColumn('cover', 1, 1)
            ->addColumn('title', 1)
            ->addColumn('tags', 2)
            ->addColumn('created_at', 2)
            ->addColumn('updated_at', 2);
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
            ->setDefaultSort('title', 'asc')
            ->addFilter('tags', TagServiceFilter::class)
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
        $service = Service::query();
        if($params->sortedBy()) {
            $service->orderBy($params->sortedBy(), $params->sortedDir());
        }

        if($params->hasSearch() || $params->filterFor('tags')) {
            $service->leftJoin('service_tag', 'service.id', '=', 'service_tag.service_id')
                ->leftJoin('tag', 'tag.id', '=', 'service_tag.tag_id');

            if ($params->filterFor('tags')) {
                $service->whereIn('tag.id', (array)$params->filterFor('tags'));
            }

            if ($params->hasSearch()) {
                foreach ($params->searchWords() as $word) {
                    $service->where(function ($query) use ($word) {
                        $query->orWhere('service.title', 'like', $word)
                            ->orWhere('tag.name', 'like', $word);
                    });
                }
            }
        }

        $this->setCustomTransformer('tags', function($tags, $service) {
            return $service->tags->map(function($tag) {
                return (new LinkToEntity($tag->label, 'tags'))
                    ->setTooltip('See related tags')
                    ->setSearch($tag->title)
                    ->render();
            });
        })->setCustomTransformer('cover', new SharpUploadModelAttributeTransformer(100));

        return $this->transform($service->with('cover', 'tags')
            ->paginate(10, ['service.*'])
        );
    }
}
