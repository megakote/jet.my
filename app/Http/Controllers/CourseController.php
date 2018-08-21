<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($slug)
    {
        $category = CourseCategory::where('slug', $slug)->first();
        $data = [
            'title' => $category->name,
            'courses' => $category->courses()->get()
        ];
        return view('courses', $data);
    }

    public function show($slug)
    {
        $page = Course::where('slug', $slug)->first();

        return view('course', $page);
    }
}
