<?php

namespace App\Eloquent;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Customer
 * @package App\Eloquent
 * @property integer $id
 * @property string $phone
 * @property string $chat_id
 * @property string $username
 * @property string $state
 * @property string $first_name
 * @property string $last_name
 * @property integer $update_id
 * @property integer $user_id
 * @property User $user
 * @property string $created_at
 * @property string $updated_at
 */
class Customer extends Model
{
    public const STATE_START = 'start';
    public const STATE_HUNTING = 'hunting';

    protected $table = 'customer';
    protected $fillable = ['phone', 'chat_id', 'state', 'username', 'update_id', 'first_name', 'last_name', 'user_id'];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param string $state
     * @return bool
     */
    public function setState(string $state): bool
    {
        $this->state = $state;
        return $this->save();
    }

    public function setUpdateId(string $updateId): bool
    {
        $this->update_id = $updateId;
        return $this->save();
    }

}
