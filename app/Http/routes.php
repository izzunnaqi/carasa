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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function () {
//     echo 'bello';
// });

// Route::get('hello/{name}', function ($name) {
//     echo 'Hello there, '.$name;
// });

// // create an item
// Route::post('test', function(){
// 	echo 'ini POST';
// });

// // read an item
// Route::get('test', function(){
// 	echo 'ini GET';
// 	echo '<form method="POST" action="test">';
// 	echo '<input type="submit">';
// //	echo '<input type="hidden" value="PUT" name="_method">';
// 	echo '<input type="hidden" value="DELETE" name="_method">';
// 	echo '</form>';
// });
// // update an item
// Route::put('test', function(){
// 	echo 'ini PUT';
// });

// // delete an item
// Route::delete('test', function(){
// 	echo 'ini DELETE';
// });

Route::get('/login', function (){
    return view('login');
});
Route::get('/resetPassword', function (){
    return view('resetPassword');
});
Route::get('/home', function (){
    return view('index');
});
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
