<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [
        'id', 'make', 'model', 'user_id'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
