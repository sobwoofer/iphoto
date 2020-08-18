<?php

namespace App\Sharp\Entities\Tag;

use App\Eloquent\Tag;
use App\Sharp\Filters\TagPhotoFilter;
use App\Sharp\Filters\TagPostFilter;
use Code16\Sharp\EntityList\Containers\EntityListDataContainer;
use Code16\Sharp\EntityList\EntityListQueryParams;
use Code16\Sharp\EntityList\SharpEntityList;

class ListTag extends SharpEntityList
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
            EntityListDataContainer::make('label')
                ->setLabel('Label')
                ->setSortable()
        )->addDataContainer(
            EntityListDataContainer::make('tag')
                ->setLabel('Tag')
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
            ->addColumn('label', 3)
            ->addColumn('tag', 3)
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
            ->setDefaultSort('id', 'asc')
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
        $tag = Tag::select('tag.*')->distinct();

        if($ids = $params->specificIds()) {
            $tag->whereIn('id', $ids);

        } else {
            if ($post = $params->filterFor('post')) {
                $tag->leftJoin('post_tag', 'tag.id', '=', 'post_tag.tag_id')
                    ->leftJoin('post', 'post.id', '=', 'post_tag.post_id')
                    ->where('post.id', $post);
            }

            if ($photo = $params->filterFor('photo')) {
                $tag->leftJoin('photo_tag', 'tag.id', '=', 'photo_tag.tag_id')
                    ->leftJoin('photo', 'photo.id', '=', 'photo_tag.photo_id')
                    ->where('photo.id', $photo);
            }

            if ($service = $params->filterFor('service')) {
                $tag->leftJoin('service_tag', 'tag.id', '=', 'service_tag.tag_id')
                    ->leftJoin('service', 'service.id', '=', 'service_tag.service_id')
                    ->where('service.id', $service);
            }

            if ($params->sortedBy()) {
                $tag->orderBy($params->sortedBy(), $params->sortedDir());
            }

            if ($params->hasSearch()) {
                foreach ($params->searchWords() as $word) {
                    $tag->where('tag.label', 'like', $word);
                }
            }
        }

        return $this->transform($tag->paginate(30));
    }
}
