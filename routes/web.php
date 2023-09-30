<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TonacjeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return view('viewSong');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//autoryzowane - panel admina
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        //return view('adminViews.admin_dashboard');
        return view('adminViews.empty');
    })->name('admin');



    Route::resource('/admin/tonacje', TonacjeController::class);

});
