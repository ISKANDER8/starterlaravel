<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Admin\SecondController;
use App\Http\Controllers\NewsController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
   return 'welcome';
});
//Route::namespace('Front')->group(function(){
   // Route::get('users','UserController@showUserName');
   // Route::get('/users', [UserController::class,'showUserName']);

//});
//Route::prefix('userse')->group(function(){
    //Route::get('/showname', [UserController::class,'showUserName']);
   // Route::get('/showAge', [UserController::class,'showUserAge']);

//});
// Route::group(['prefix'=>'users' , 'middleware' => 'auth'],function(){
  //  Route::get('/showname', [UserController::class,'showUserName']);
// });

//Route::group(['namespace' => 'Admin'], function(){

   // Route::get('/showname', [SecondController::class,'showUserName']);
   // Route::get('/showprenom', [SecondController::class,'showUserPrenom']);

//});

//Route::get('login', function(){
    //return 'You Must Be Login';
//}) ->name('login');
 
//Route::resource('news' , NewsController ::class );
//Route::namespace('Front')->group(function(){
//   Route::get('/index', [UserController::class,'showUserinf']);
//});
Route::get('/landing', function () {
   return View('landing');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
