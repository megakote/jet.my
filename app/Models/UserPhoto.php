<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPhoto extends Model
{
    protected $fillable = ['photo'];

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
