<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
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



// =========== admin ===========
// login
Route::get('admin/login', [LoginController::class, 'index']);

// dashboard
Route::get('admin', function () {
    return view('admin.dashboard.index', [
        "title" => "Dashboard"
    ]);
});

Route::resource('admin/news', NewsController::class);

// =========== end admin ===========

// =========== landing page ===========
// home
Route::get('/', function () {
    return view('landing-page.home', [
        "title" => "Home"
    ]);
});
// =========== end landing page ===========