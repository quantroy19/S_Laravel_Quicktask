<?php

use App\Http\Controllers\LanguageControlle;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\UserController;
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
Route::resource('users', UserController::class);

//Route Office
Route::name('offices.')->group(function () {
    Route::get('offices', [OfficeController::class, 'index'])->name('index');
    Route::get('offices/create', [OfficeController::class, 'create'])->name('create');
    Route::get('offices/{office}', [OfficeController::class, 'show'])->where(['office' => '[0-9]+'])->name('show');
    Route::get('offices/{office}/edit', [OfficeController::class, 'edit'])->name('edit');
    Route::post('offices', [OfficeController::class, 'store'])->name('store');
    Route::put('offices/{office}', [OfficeController::class, 'update'])->name('update');
    Route::delete('offices/{office}', [OfficeController::class, 'destroy'])->name('destroy');
});

Route::get('change-language/{language}', [LanguageControlle::class, 'changeLanguage'])->middleware('locale')
    ->name('change-language');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('user-detail', function () {
    return view('user.list-user');
})->middleware(['auth'])->name('user.list_user');

require __DIR__ . '/auth.php';
