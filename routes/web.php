<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserauthController;


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

//---------------------------------------homecontroller---------------------------------------------------------
Route::match(['get', 'post'], '/',[HomeController::class,"course"])->name("home");
Route::match(['get', 'post'], '/view/{id}',[HomeController::class,"view"])->name("view");
//homecontroller end

//-----------------------------------------userAuthController------------------------------------------
Route::match(['post','get'],'/signup',[UserauthController::class,'signUp'])->name('signup');
Route::match(['post','get'] ,'/login',[UserauthController::class,'login'])->name('login');
Route::match(['post','get'] ,'/logout',[UserauthController::class,'logout'])->name('logout');

//userAuthController end

//---------------------------------------------------admain------------------------------------------------

Route::prefix('admin')->group(function(){
    Route::middleware('auth')->group(function () {
        Route::get('/',[AuthController::class,"index"])->name("dashboard");
        Route::resource('course',CourseController::class);
    });
    Route::match(['get', 'post'], '/adminlogin',[AuthController::class,'adminLogin'])->name('adminlogin');   

});

// admain end