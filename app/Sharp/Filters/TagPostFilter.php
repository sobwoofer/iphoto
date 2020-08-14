<?php

namespace App\Sharp\Filters;

use App\Eloquent\Post;
use Code16\Sharp\EntityList\EntityListSelectFilter;

class TagPostFilter implements EntityListSelectFilter
{
    /**
     * @return array
     */
    public function values()
    {
        return Post::orderBy('title')
            ->pluck('title', 'id')
            ->all();
    }
}
