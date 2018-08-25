<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{

    public function index(Request $request)
    {
        $data = [];
        $data['users'] = User::where('published', true)->paginate(15);
        $data['all'] = User::where('published', true)->count();
//dd($data['users']->items()[0]->photos()->first());
        return view('personnel', $data);
    }

    public function show($id, Request $request)
    {
        $data = [];
        $data['user'] = User::find($id);

        return view('persona', $data);
    }
}
