<?php

namespace App\Eloquent;

use Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * Class Tag
 * @package App\Eloquent
 * @property int $id
 * @property string $tag
 * @property string $label
 * @property string $created_at
 * @property string $updated_at
 * @property Photo[] $photos
 * @property Photo[] $photosOnWidget
 * @property Service[] $services
 * @property Post[] $posts
 */
class Tag extends Eloquent
{
    protected $table = 'tag';
    protected $fillable = ['tag', 'label'];

    /**
     * @return HasMany
     */
    public function photoTag(): HasMany
    {
        return $this->hasMany(PhotoTag::class);
    }

    /**
     * @return HasMany
     */
    public function postTag(): HasMany
    {
        return $this->hasMany(PostTag::class);
    }

    /**
     * @return BelongsToMany
     */
    public function photos(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class);
    }

    /**
     * @return BelongsToMany
     */
    public function photosOnWidget(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class)->limit(10);
    }

    /**
     * @return HasManyThrough
     */
    public function posts(): HasManyThrough
    {
        return $this->hasManyThrough(Post::class, PhotoTag::class);
    }
}
