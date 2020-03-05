<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostTag extends Model
{
    protected $table = 'post_tag';

    /**
     * @return BelongsTo
     */
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

    /**
     * @return BelongsTo
     */
    public function photo(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
