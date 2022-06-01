<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['admin']], function() {
    Route::get("dashboard",[UserController::class,'dashboard'])->name('admin.dashboard');
    Route::resource("admin/users",UserController::class);
});



// website  Routes
Route::get('/', function (){return redirect('login');});



// Logout route
Route::get('/logout', [UserController::class,'logout']);


// Authenticaction Routes
Auth::routes();

Route::fallback(function(){
    return view('errors.404');
});

