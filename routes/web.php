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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/result', function () {
    return view('result');
});
Route::group(['middleware' => 'web','auth'], function () {
	 Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('adminlte::home');
    } else  if (Auth::user()->admin == 1){
      $users['users'] = \App\User::all();
      return view('adminlte::adminhome', $users);
    }
  });
	
Route::get('/profile', 'PagesController@index')-> middleware('authenticated') ;
Route::get('/menu', 'PagesController@menu')-> middleware('authenticated') ;
Route::get('/hmenu', 'PagesController@hmenu')-> middleware('authenticated') ;
Route::get('/event', 'PagesController@event')-> middleware('authenticated') ;
Route::get('/notice', 'PagesController@notice')-> middleware('authenticated') ;
Route::get('/contacts', 'PagesController@contacts')-> middleware('authenticated') ;
Route::get('/settings', 'PagesController@settings')-> middleware('authenticated') ;
Route::get('/results', 'PagesController@results')-> middleware('authenticated') ;
Route::get('/student', 'PagesController@student')-> middleware('authenticated') ;
Route::get('/teacher', 'PagesController@teacher')-> middleware('authenticated') ;
Route::get('/staff', 'PagesController@staff')-> middleware('authenticated') ;
Route::get('/rlist', 'PagesController@rlist')-> middleware('authenticated') ;
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
