<?php

use App\Http\Controllers\linksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staticsController;


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
//Route::get("test" , "usersController@test");
Route::post("test" , "linksController@test" )->name("test");

Route::get("login" , function(){
    return view("login");
})->name("login")->middleware("guest");

Route::post("login" , "authController@authenticate")->middleware("guest");
Route::get("logout" , "authController@logout")->name("logout")->middleware("auth:user");


Route::middleware("guest")->prefix("register")->group(function (){
    Route::get("/" , function(){
        return view("register");
    })->name("register");
    Route::post('/add_new_user', 'usersController@add_new_user' );
});

Route::middleware("auth:user")->group(function (){
    
    // Route::get('/', function () {
    //     return view('users.main');
    // })->name("dashboard");

    Route::get("/" , [ staticsController::class , "index"])->name("dashboard");
    
    Route::get('links', [ linksController::class , "show" ])->name("links");
    Route::post("links" , "linksController@visit")->name("visit");
    Route::post("confirm_code" , "linksController@confirm_visit")->name("confirm_visit");
    
    Route::get('add-link', function () {
        return view('users.add-link');
    })->name("add-link");

    Route::post("add-link" , "linksController@create" )->name("add-new-link");
    
    
    Route::get('user-links', function () {
        return view('users.user-links');
    })->name("user-links");
    
    Route::get('referral', function () {
        return view('users.referral');
    })->name("referral");

    Route::get('setting', function () {
        return view('users.setting');
    })->name("setting");

    Route::get('support', function () {
        return view('users.support');
    })->name("support");
    
    Route::get('/code/{code}', function ( $code ){
          echo $code ;
    })->name("ee");

});


