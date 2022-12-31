<?php

use App\Http\Controllers\LoginController;
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

// =========== admin ===========
// login
Route::get('dashboard/login', [LoginController::class, 'index']);

// dashboard
Route::get('dashboard', function () {
    return view('admin.dashboard.index', [
        "title" => "Dashboard"
    ]);
});

// =========== end admin ===========