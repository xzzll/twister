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

Auth::routes();
// Route::get('login',function(){
//     return view('home.login');
// });

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::any('/test', 'TestController@test');
Route::get('/test', 'TestController@twistt');
Route::get('/insert', 'TestController@insert');
Route::get('/ping', 'TestController@ping');
Route::any('/pingadd', 'TestController@pingadd');
Route::get('/pinglun/{id}', 'TestController@pingadd');




Route::get('/twist','TwistController@index')->name('home');
Route::get('/twist/{twist}','TwistController@show');

//github sociate
Route::any('/github','OAuthController@redirectToProvider');
Route::any('/github/callback','OAuthController@handleProviderCallback');


//User Follow
Route::get('/follow/{user}','UserController@followOrNot');
