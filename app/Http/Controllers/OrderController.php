<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function add(User $user, Request $request)
    {
        if (!$user->id) {
            $user->fill([
                'email' => $request->email,
                'password' => Str::random(10)
            ])->save();
        }
        Order::create([
            'user_id' => $user->id,
            'days' => $request->days,
        ]);
    }
}
