<?php

namespace App\Eloquent;

use Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * Class Photo
 * @package App\Eloquent
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property Media $cover
 */
class Photo extends Eloquent
{
    protected $table = 'photo';
    protected $fillable = ['image', 'title'];

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
