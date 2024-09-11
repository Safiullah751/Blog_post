<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\PostController;
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

Route::get('/', function(){
    return view('welcome');
})->name('home');
Route::middleware('auth')->group(function(){
 Route::get('/dashbord',[DashbordController::class,'index'])->name('Dashbord');

 Route::post('/logout' , [AuthController::class ,'logout'])->name('logout');

});

Route::middleware('guest')->group(function(){

    Route::view( '/register','auth.register')->name('register');
    Route::view('/login' ,'auth.login')->name('login');
    Route::post('/register' ,[AuthController::class ,'register']);
    Route::post('/login' ,[AuthController::class , 'login']);
});
Route::resource('posts' , PostController::class );
Route::get('/{user}/posts' ,[PostController::class ,'userposts'])->name('userspost');


