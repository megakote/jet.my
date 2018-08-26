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
        return view('access', ['accessItem' => $accessItem]);
    }

    public function accessAdd(Request $request)
    {
        Order::create([
            'user_id' => Auth::check() ? Auth::user()->id : '',
            'data' => serialize($request->all()),
            'type' => 0,
            'product_id' => $request->id
        ]);
         return redirect()->back()->with('success', 'Ваша заявка была отправлена оператору');
    }

    public function courseAdd(Request $request)
    {
        Order::create([
            'user_id' => Auth::check() ? Auth::user()->id : '',
            'data' => serialize($request->all()),
            'type' => 1,
            'product_id' => $request->id
        ]);
         return redirect()->back()->with('success', 'Ваша заявка была отправлена оператору');
    }

    public function course(Request $request)
    {
        $course = Course::findOrFail($request->id);
        return view('signup', ['course' => $course]);
    }
}
