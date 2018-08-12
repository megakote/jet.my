<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{

    public function index(Request $request)
    {
        $data = [];
        $data['users'] = User::paginate(15);
        $data['all'] = User::count();

        return view('personnel', $data);
    }
}
