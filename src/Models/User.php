<?php

namespace Pbbg\Core\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Retrieves the items owned by the user.
     */
    public function items(): HasMany
    {
        return $this->hasMany(UserItem::class)->with('model');
    }

    /**
     * Retrieves the equipped items owned by the user.
     */
    public function equippedItems(): HasMany
    {
        return $this->items()->where('equipped', true);
    }

    /**
     * Retrieves the stats associated with the user.
     */
    public function stats(): HasMany
    {
        return $this->hasMany(UserStat::class);
    }
}