<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $guarded = [
        'id', 'address', 'city', 'state', 'zip', 'user_id'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
