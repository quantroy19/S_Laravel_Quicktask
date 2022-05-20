<?php

use App\Http\Controllers\LanguageControlle;
use App\Http\Controllers\OfficeControlle;
use App\Http\Controllers\UserControlle;
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
Route::resource('users', UserControlle::class);

//Route Office
Route::name('office.')->group(function () {
    Route::get('offices', [OfficeControlle::class, 'index'])->name('index');
    Route::get('offices/{office}', [OfficeControlle::class, 'show'])->name('show');
    Route::get('offices/{office}/edit', [OfficeControlle::class, 'edit'])->name('edit');
    Route::get('offices/create', [OfficeControlle::class, 'create'])->name('create');
    Route::post('offices', [OfficeControlle::class, 'store'])->name('store');
    Route::put('offices/{office}', [OfficeControlle::class, 'update'])->name('update');
    Route::delete('offices/{office}', [OfficeControlle::class, 'destroy'])->name('destroy');
});

Route::get('change-language/{language}', [LanguageControlle::class, 'changeLanguage'])->middleware('locale')
    ->name('change-language');

Route::get('/dashboard', function () {
    return view('user.index');
})->middleware(['auth'])->name('user.index');
Route::get('/user-detail', function () {
    return view('user.list_user');
})->middleware(['auth'])->name('user.list_user');

require __DIR__ . '/auth.php';
