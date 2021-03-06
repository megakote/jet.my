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

    public function list()
    {
        $categories = CourseCategory::all();
        $data = ['coursesList'];
        foreach ($categories as $category) {
            $data['coursesList'][] = [
                'title' => $category->name,
                'courses' => $category->courses()->get()
            ];
        }
        return view('courses-list', $data);
    }

    public function show($slug)
    {
        $page = Course::where('slug', $slug)->first();

        return view('course', $page);
    }

    public function distantly()
    {
        $courses = Course::where('distantly', true)->get();

        return view('courses-list', [
            'title' => 'Дистанционные курсы',
            'courses' => $courses
        ]);
    }


}
