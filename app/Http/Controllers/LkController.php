<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LkController extends Controller
{

    public function __construct()
    {

//        parent::__construct();

    }

    public function index(Request $request)
    {
        if (!Auth::user()) {
            return redirect()->route('home');
        }

        $data = [];


        return view('personal', $data);
    }
}
