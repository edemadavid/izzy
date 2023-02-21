<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AudioMixController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SermonController;


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

Route::get('/', [PageController::class, 'index'])->name('page.home');
Route::get('/about', [PageController::class, 'about'])->name('page.about');
Route::get('/top-hits',[PageController::class, 'tophits'])->name('page.tophits');
Route::get('/gallery', [PageController::class, 'gallery'])->name('page.gallery');
Route::get('/contact-us', [PageController::class, 'contact'])->name('page.contact');


Route::get('/sermons', [PageController::class, 'sermons'])->name('page.sermons');
Route::get('/books', [PageController::class, 'books'])->name('page.books');


//Auth
Route::get('/register', [AuthController::class, 'registerpage']);
Route::get('/login', [AuthController::class, 'loginpage']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');





Route::middleware(['isLoggedin'])->group (function() {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');


    /*
    ----------------------------------------------------------------
    | Category Routes
    ----------------------------------------------------------------
    */
    Route::get('/category', [CategoryController::class, 'index'])
    ->name('category');

    Route::get('/category/add', [CategoryController::class, 'create'])
    ->name('addcategory');

    Route::post('category/store', [CategoryController::class, 'store'])
    ->name('storecategory');

    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])
    ->name('deletecategory');

    /*
    ----------------------------------------------------------------
    | Event Routes
    ----------------------------------------------------------------
    */
    Route::get('/event', [EventController::class, 'index'])
    ->name('event');

    Route::get('/event/add', [EventController::class, 'create'])
    ->name('event.add');

    Route::post('/event/store', [EventController::class, 'store'])
    ->name('event.store');

    Route::get('/event/edit/{id}', [EventController::class, 'edit'])
    ->name('event.edit');

    Route::post('/event/store/{id}', [EventController::class, 'update'])
    ->name('event.update');

    Route::get('/event/delete/{id}', [EventController::class, 'destroy'])
    ->name('event.delete');


    /*
    ----------------------------------------------------------------
    | Audio Routes
    ----------------------------------------------------------------
    */
    Route::get('/audiomix', [AudioMixController::class, 'index'])
    ->name('audioMix');

    Route::get('/audio/add', [AudioMixController::class, 'create'])
    ->name('audioMix.add');

    Route::post('/audio/store', [AudioMixController::class, 'store'])
    ->name('audioMix.store');

    Route::get('/audio/edit/{id}', [AudioMixController::class, 'edit'])
    ->name('audioMix.edit');

    Route::post('/audio/store/{id}', [AudioMixController::class, 'update'])
    ->name('audioMix.update');

    Route::get('/audio/delete/{id}', [AudioMixController::class, 'destroy'])
    ->name('audioMix.delete');








});
