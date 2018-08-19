<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $data = [
            'news_list' => News::paginate(10)
        ];

        return view('news_list', $data);
    }

    public function show($slug)
    {
        $page = News::where('slug', $slug)->first();

        return view('page', $page);
    }
}
