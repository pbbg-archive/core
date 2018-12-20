<?php

namespace Pbbg\Core\Models;

use Illuminate\Database\Eloquent\Model;

class UserStat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'key', 'value',
    ];

    /**
     * Retrieves the stat owner user relationship.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}