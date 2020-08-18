<?php

namespace App\Sharp\EmbeddedEntityLists;

use App\Sharp\Tag\ListTag;

class ListPostTag extends ListTag
{
    function buildListConfig()
    {
        parent::buildListConfig();

        $this->setReorderable(ListPostRecorderHandler::class);
    }
}
