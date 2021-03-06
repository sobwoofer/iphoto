<?php

namespace App\Eloquent;

use Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Order
 * @package App\Eloquent
 * @property int $id
 * @property string $first_name
 * @property string $phone
 * @property string $email
 * @property string $message
 * @property string $service_name
 * @property int $price
 * @property int $service_id
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends Eloquent
{
    protected $table = 'order';
    protected $fillable = ['first_name', 'phone', 'email', 'message', 'service_name', 'price', 'service_id'];

    /**
     * @return BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}

