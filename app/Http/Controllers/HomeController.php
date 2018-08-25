<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainPageSlider;
use App\Models\MainPageReviews;
use App\Models\PhotoAlbum;
use App\Models\Course;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $data['slider'] = MainPageSlider::orderBy('order', 'asc')->get();
        $data['courses'] = Course::where('on_main', true)
            ->orderBy('order', 'asc')
            ->limit(10)
            ->get();
        $data['news'] = News::limit(4)->get();
        $data['reviews'] = MainPageReviews::orderBy('order', 'asc')->get();
        $data['albums'] = PhotoAlbum::where('on_main', 'true')->limit(20)->get();

        return view('home', $data);
    }
}
