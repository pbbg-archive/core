<?php

namespace Pbbg\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemType extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'consume'   => 'boolean',
        'equip'     => 'boolean',
        'equip_max' => 'integer',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'consume', 'equip', 'equip_max',
    ];

    /**
     * Retrieves the items of this type.
     */
    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'type_id', 'id');
    }
}
