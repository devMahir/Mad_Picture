<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\HomevideoController;

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

Auth::routes();

Route::get('/',       [App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('about',   [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('package', [App\Http\Controllers\PageController::class, 'package'])->name('package');
Route::get('service', [App\Http\Controllers\PageController::class, 'service'])->name('service');


Route::group(['prefix' => 'admin', 'middleware' => 'auth' ], function() {
    Route::get('dashboard', [App\Http\Controllers\PageController::class, 'admin'])->name('admin.dashboard');
    Route::resource('contact', ContactController::class );
    Route::resource('quote', QuoteController::class );
    Route::resource('video', VideoController::class );
    Route::resource('homevideo', HomevideoController::class );
});