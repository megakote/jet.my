<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Course;
use App\Models\Order;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{

    public function access(Request $request)
    {
        $accessItem = Access::findOrFail($request->id);
        return view('access', compact($accessItem));
    }

    public function accessAdd(Request $request)
    {

    }

    public function courseAdd(Request $request)
    {

    }

    public function course(Request $request)
    {
        $course = Course::findOrFail($request->id);
        return view('signup', compact($course));
    }

    private function add(User $user, Request $request)
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
