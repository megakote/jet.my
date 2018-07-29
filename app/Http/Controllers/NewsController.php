<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\News;

class NewsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'news' => News::all()
        ];

        return view('news_list', $data);
    }
}
