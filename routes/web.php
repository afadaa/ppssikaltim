<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

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

Route::resource('/', App\Http\Controllers\PengunjungController::class);

// front
Route::get('/berita', 'App\Http\Controllers\PengunjungController@frontBerita');
Route::get('/galeri', 'App\Http\Controllers\PengunjungController@frontGaleri')->name('galeri.front');
Route::get('/event', 'App\Http\Controllers\PengunjungController@frontEvent')->name('agenda.front');
Route::get('/about', 'App\Http\Controllers\PengunjungController@frontAbout')->name('about.front');

// detail
Route::get('/berita/{slug}', 'App\Http\Controllers\PengunjungController@showBerita');
Route::get('/artikel/{slug}', 'App\Http\Controllers\PengunjungController@showMenu');
Route::get('/event/{slug}', 'App\Http\Controllers\PengunjungController@showEvent');
Route::get('/about/{slug}', 'App\Http\Controllers\PengunjungController@showAbout');

Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['middleware' => 'auth'], function() {
    Route::resource('users', App\Http\Controllers\UserController::class);
    
    Route::resource('categories', App\Http\Controllers\CategoriesController::class);

    Route::resource('videos', App\Http\Controllers\VideoController::class);

    Route::resource('galeris', App\Http\Controllers\GaleriController::class);

    Route::resource('announcements', App\Http\Controllers\AnnouncementController::class);

    Route::resource('slides', App\Http\Controllers\SlideController::class);
    
    Route::resource('beritas', App\Http\Controllers\BeritaController::class);
    
    Route::resource('agendas', App\Http\Controllers\AgendaController::class);
    
    Route::resource('layanans', App\Http\Controllers\LayananController::class);

    Route::resource('partners', App\Http\Controllers\PartnerController::class);
});










