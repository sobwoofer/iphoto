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

    public function photo()
    {
        return $this->morphOne(Media::class, 'model')->where('model_key', 'photo');
    }

    public function getDefaultAttributesFor($attribute): array
    {
        return $attribute === 'photo' ? ['model_key' => $attribute] : [];
    }
}
