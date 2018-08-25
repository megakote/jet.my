<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    protected $guarded = [];

    const TYPE = [
        0 => Access::class,
        1 => Course::class,
    ];

//    public function add(int $days, $email = null, User $user)
//    {
//        if (!$user->id) {
//            $user->fill([
//                'email' => $email,
//                'password' => Str::random(10)
//            ])->save();
//        }
//        $this->fill([
//            'user_id' => $user->id,
//            'days' => $days,
//        ])->save();
//    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo($this::TYPE[$this->type], 'product_id');
    }
}
