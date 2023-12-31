<?php


use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;
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

Route::get('/', [IndexController::class, 'home'])->name('homepage');

Route::get('/danh-muc/{slug}', [IndexController::class, 'category'])->name('category');
Route::get('the-loai/{slug}', [IndexController::class, 'genre'])->name('genre');
Route::get('/quoc-gia/{slug}', [IndexController::class, 'country'])->name('country');
Route::get('/phim/{slug}', [IndexController::class, 'movie'])->name('movie');
Route::get('/xem-phim/{slug}/{tap}', [IndexController::class, 'watch']);
Route::get('/so-tap', [IndexController::class, 'episode'])->name('so-tap');
Route::get('/tag/{tag}', [IndexController::class, 'tag']);
Route::get('/tim-kiem', [IndexController::class, 'timkiem'])->name('tim-kiem');


Route::get('/admin', [HomeController::class, 'index'])->name('admin');
Route::get('/dashboard', [HomeController::class, 'show_dashboard'])->name('dashboard');
Route::get('/logout', [HomeController::class, 'log_out'])->name('logout');
Route::post('/admin-dashboard', [HomeController::class, 'dashboard'])->name('admin-dashboard');

Route::resource('category', CategoryController::class);
Route::post('resorting', [CategoryController::class,'resorting'])->name('resorting');
Route::resource('genre', GenreController::class);
Route::resource('country', CountryController::class);

Route::resource('episode', EpisodeController::class);
Route::get('select-movie', [EpisodeController::class, 'select_movie'])->name('select-movie');

Route::resource('movie', MovieController::class);

Route::get('/update-topview-phim', [MovieController::class, 'update_topview']);
Route::get('/update-season-phim', [MovieController::class, 'update_season']);

