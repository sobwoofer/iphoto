<?php

namespace App\Sharp\Filters;

use App\Eloquent\Tag;
use Code16\Sharp\EntityList\EntityListSelectFilter;

class TagServiceFilter implements EntityListSelectFilter
{
    /**
     * @return array
     */
    public function values()
    {
        return Tag::orderBy('id')->pluck('label', 'id')->all();
    }
}
