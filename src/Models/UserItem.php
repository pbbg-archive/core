<?php

namespace Pbbg\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserItem extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'equipped' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'item_id', 'equipped',
    ];

    /**
     * Retrieves the associated item relationship.
     */
    public function model(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }

    /**
     * Retrieves the item owner user relationship.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
