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


\Debugbar::enable();

Route::get('/get', function () {
//    dispatch(new App\Jobs\Parsers\GetUsers());
//    dispatch(new App\Jobs\Parsers\GetOrders());
//    dispatch(new App\Jobs\Export\PutForms());
    dd(Auth::user());
    return;
});
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');


Route::get('/personnel/', 'PersonnelController@index')->name('personnel');
Route::get('/personnel/{id}', 'PersonnelController@show')->name('persona');



Route::get('/page/{slug}', function($slug){

    $page = App\Models\Page::where('slug', $slug)->first();

    return ($page) ? view('page', $page) : abort(404);
});



