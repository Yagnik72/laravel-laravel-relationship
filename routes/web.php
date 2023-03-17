<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MechanicController;

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

// One to One || reverse
Route::get('/add-customer', [CustomerController::class, 'add_customer']);
Route::get('/show-mobile/{customer_id}', [CustomerController::class, 'show_mobile_one_to_one']);
Route::get('/show-customer/{mobile_id}', [MobileController::class, 'show_customer_one_to_one_inverse']);
Route::get('/customer-id/{customerID}', [indexController::class, 'index']);

//One to Many
Route::get('/add-author', [AuthorController::class, 'add_author']);
Route::get('add-post/{author_id}', [PostController::class, 'add_post']);
Route::get('show-author-posts/{author_id}', [PostController::class, 'show_posts_by_author_id']);
Route::get('show-post-author/{post_id}', [PostController::class, 'show_author_by_post_id']); // -inverse

// Has One and Many through
Route::get('add-mechanic', [MechanicController::class, 'add_mechanic']);
Route::get('add-car/{mechanic_id}', [CarController::class, 'add_car']);
Route::get('add-owner/{car_id}', [OwnerController::class, 'add_owner']);
Route::get('show-mco-data/{mechanic_id}', [OwnerController::class, 'show_mechanic_to_owner_data']);


// Many to Many
Route::get('add-song', [SongController::class, 'add_song']);
Route::get('add-singer', [SingerController::class, 'add_singer']);
Route::get('show-song-by-singerid/{singer_id}', [SongController::class, 'show_song']);
Route::get('show-singer-by-songid/{song_id}', [SingerController::class, 'show_singer']);


