<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('photo', 'PhotoController');

//Route::group(['as' => 'admin::'], function () {
//    Route::get('dashboard', ['as' => 'dashboard', function () {
//        // 路由被命名为 "admin::dashboard"
//        return "admin::dashboard";
//    }]);
//});

//Route::any('user/{id}', function ($id) {
//    return 'foo'.$id;
//});

//Route::match(['get', 'post'], '/', function () {
//    return '2222';
//});

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('user/profile', ['as' => 'profile', 'uses'=> 'UserController@showProfile']);

Route::get('user/profile', 'UserController@showProfile')->name('profile');


//Route::get('/hello/{id}/{name?}', function($id, $name = null){
//    return 'hello:'.$id.' name:'.$name;
//})->where(['name'=>'[\w\d]+']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
