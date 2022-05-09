<?php

use App\Http\Controllers\Controller;
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
Route::get('/test', [Controller::class, 'getFullName']);
Route::get('/set-username', [Controller::class, 'setUserName']);
Route::get('/active', [Controller::class, 'getUserisActive']);
Route::get('/isAdmin', [Controller::class, 'getUserisAdmin']);
