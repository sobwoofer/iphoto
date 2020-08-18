<?php

namespace App\Eloquent;

use Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * Class Post
 * @package App\Eloquent
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class Post extends Eloquent
{
    protected $table = 'post';
    protected $fillable = ['title', 'image', 'description'];

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function cover()
    {
        return $this->morphOne(Media::class, 'model')->where('model_key', 'cover');
    }

    public function getDefaultAttributesFor($attribute): array
    {
        return $attribute === 'cover' ? ['model_key' => $attribute] : [];
    }

}
