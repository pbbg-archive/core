<?php

namespace Pbbg\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type_id',
    ];

    /**
     * Retrieves the item type relationship.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ItemType::class, 'type_id', 'id');
    }
}
