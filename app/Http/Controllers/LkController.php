<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LkController extends Controller
{


    public function index(Request $request)
    {
        if (!Auth::user()) {
            return redirect()->route('home');
        }

        $data = [];
        $data['user'] = Auth::user();

        return view('lk', $data);
    }

    public function edit(Request $request)
    {
        if (!Auth::user()) {
            return redirect()->route('home');
        }

        Auth::user()->fill($request->all());

        return response()->redirectToRoute('lk');
    }
}
