<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationController;

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
//Get
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/login', function () {
        return view('auth\login');
    })->name('user.login');

    Route::get('/register', function () {
        return view('auth\register');
    })->name('user.register');


    Route::middleware(['VerifyLoginAuth'])->group(function(){
        Route::get('/home',[ApplicationController::class,'ShowHome'])->name('show.home');
        //Route::get('/create-post',[])
    });



//Post

    //register
    Route::post('/action-register',[UserController::class,'UserRegister'])->name('action.register');

    //login
    Route::post('/action-login',[UserController::class,'UserLogin'])->name('action.login');