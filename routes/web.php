<?php

use App\Http\Controllers\MyprojectController;
use Illuminate\Support\Facades\Route;

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
Route::get('/pageone','MyprojectController@index');
Route::get('/create','MyprojectController@create');
Route::post('/store',"MyprojectController@store");
Route::get('/show/{posts}',"MyprojectController@show");
Route::get('/posts/{posts}/edit',"MyprojectController@edit");
Route::patch('/posts/{post}',"MyprojectController@update");
Route::delete('/posts/{post}',"MyprojectController@delete");
Auth::routes();


