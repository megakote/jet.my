<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{

    public function index(Request $request)
    {
        $data = [];
        if ($request->age || $request->height || $request->visa) {
            $filter = [];
//            if ($request->age) {
//                if ($request->age != 30) {
//                    $birth = explode('-', $request->birth);
//                    $filter[] = ['birth'];
//                } else {
//                    $filter[] = ['birth'];
//                }
//            }

            if ($request->height) {
                if ($request->height != 180 && $request->height != 160) {
                    $height = explode('-', $request->height);
                    $filter[] = ['height', '>', $height[0]];
                    $filter[] = ['height', '<', $height[1]];
                } elseif ($request->height == 160) {
                    $filter[] = ['height', '<', '160'];
                } elseif ($request->height == 180) {
                    $filter[] = ['height', '>', '180'];
                }
            }
            if ($request->visa) {
                $filter[] = ['visa', $request->visa];
            }
            $data['users'] = User::where($filter)->paginate(15);
            $data['all'] = User::where($filter)->count();
        } else {
            $data['users'] = User::where('published', true)->paginate(15);
            $data['all'] = User::where('published', true)->count();
        }


        return view('personnel', $data);
    }

    public function show($id, Request $request)
    {
        $data = [];
        $data['user'] = User::find($id);

        return view('persona', $data);
    }
}
