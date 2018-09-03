<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/get', function () {
//    dispatch(new App\Jobs\Parsers\GetUsers());
//    dispatch(new App\Jobs\Parsers\GetOrders());
//    dispatch(new App\Jobs\Export\PutForms());
    dd(Auth::user());
    return;
});
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/lk', 'LkController@index')->name('lk');
Route::post('/lk/edit', 'LkController@edit')->name('lk.edit');

Route::get('/order/access', 'OrderController@access')->name('order.access');
Route::post('/order/access', 'OrderController@accessAdd')->name('order.access.add');
Route::get('/order/course', 'OrderController@course')->name('order.course');
Route::post('/order/course', 'OrderController@courseAdd')->name('order.course.add');


Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{id}', 'NewsController@show')->name('news.show');


Route::get('/courses', 'CourseController@list')->name('courses-list');
Route::get('/courses/{slug}', 'CourseController@index')->name('courses');
Route::get('/course/{slug}', 'CourseController@show')->name('course');


Route::get('/personnel/', 'PersonnelController@index')->name('personnel');
Route::get('/personnel/{id}', 'PersonnelController@show')->name('persona');


Route::post('/contacts', function(Request $request){
//    return view('contacts');
})->name('contact.put');


Route::get('/page/{slug}', function($slug){

    $page = App\Models\Page::where('slug', $slug)->first();

    return ($page) ? view('page', $page) : abort(404);
});

Route::get('/contacts', function(){
    return view('contacts');
});

Route::get('/about/{slug}', function($slug){
    $rightColumn = \App\Models\AboutPage::all();
    $page = App\Models\AboutPage::where('slug', $slug)->first();
    return view('about', compact($rightColumn, $page));
});



