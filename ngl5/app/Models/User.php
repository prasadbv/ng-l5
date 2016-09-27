<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

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
    public function articles()
    {
        return $this->hasMany('\App\Models\Article','user_id');
    }
    public function addresses()
    {
        return $this->hasOne('\App\Models\Addresses');
    }
    public function roles()
    {
        return $this->belongsToMany('\App\Models\Role');
    }
}
