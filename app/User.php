<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $guarded = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'remember_token',
        'password',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
