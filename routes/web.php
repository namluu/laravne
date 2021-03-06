<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Cms\CategoryController;
use App\Http\Controllers\Admin\Cms\PostController;
use App\Http\Controllers\Admin\User\UserController as UserManagerController;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'home']);

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        // Matches The "/admin" URL
        return view('admin.dashboard');
    })->middleware('auth');
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    })->middleware('auth');
    Route::get('/login', function() {
        return view('admin.login');
    })->name('login');
    Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::resource('/cms/categories', CategoryController::class)->middleware('auth');
    Route::resource('/cms/posts', PostController::class)->middleware('auth');
    Route::resource('/user/users', UserManagerController::class)->middleware('auth');
});

