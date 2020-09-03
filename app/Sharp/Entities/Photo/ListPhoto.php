<?php

namespace App\Sharp\Entities\Photo;

use App\Eloquent\Photo;
use App\Sharp\Filters\TagPhotoFilter;
use Code16\Sharp\EntityList\Containers\EntityListDataContainer;
use Code16\Sharp\EntityList\Eloquent\Transformers\SharpUploadModelAttributeTransformer;
use Code16\Sharp\EntityList\EntityListQueryParams;
use Code16\Sharp\EntityList\SharpEntityList;
use Code16\Sharp\Utils\LinkToEntity;

class ListPhoto extends SharpEntityList
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
            ->addColumn('cover', 1, 2)
            ->addColumn('title', 3)
            ->addColumn('tags', 3)
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
            ->addFilter('tags', TagPhotoFilter::class)
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
        $photos = Photo::query();
        if($params->sortedBy()) {
            $photos->orderBy($params->sortedBy(), $params->sortedDir());
        }

        if($params->hasSearch() || $params->filterFor('tags')) {
            $photos->leftJoin('photo_tag', 'photo.id', '=', 'photo_tag.photo_id')
                ->leftJoin('tag', 'tag.id', '=', 'photo_tag.tag_id');

            if ($params->filterFor('tags')) {
                $photos->whereIn('tag.id', (array)$params->filterFor('tags'));
            }

            if ($params->hasSearch()) {
                foreach ($params->searchWords() as $word) {
                    $photos->where(function ($query) use ($word) {
                        $query->orWhere('photo.name', 'like', $word)
                            ->orWhere('tag.name', 'like', $word);
                    });
                }
            }
        }

        $this->setCustomTransformer('tags', function($tags, $photo) {
            return $photo->tags->map(function($tag) {
                return (new LinkToEntity($tag->label, 'tags'))
                    ->setTooltip('See related tags')
                    ->setSearch($tag->title)
                    ->render();
            });
        })->setCustomTransformer('cover', new SharpUploadModelAttributeTransformer(100));

        return $this->transform($photos->with('cover', 'tags')
            ->paginate(10, ['photo.*'])
        );
    }
}
