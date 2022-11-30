<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CatController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CommentController;


// user controller group
Route::controller(UserController::class)::middleware('guest')->group(function(){
    Route::get('/','index');
    Route::get('user/contact','contact');
    Route::get('user/movie','movie');
    Route::get('user/price_plan','price_plan');
    Route::get('user/tvseries','tvseries');
    Route::get('user/reset','reset');
    // profile
    Route::get('user/profile','user_profile');
    // delete all user
    Route::get('/delet_all_users','delet_all_users');
 });


// auth conttroller group

Route::controller(AuthController::class)->group(function(){
    // update profile
    Route::get('/edit/{id}','edit');
    Route::post('/update/{id}','update');
    // register
    Route::post('/register','register');
    // login
    Route::post('/login','login');
    // logout
    Route::get('/logout','logout');
});



// admin controller group
Route::controller(AdminController::class)->group(function(){
    Route::get('admin/register','register');
    Route::get('admin/login','login');
    Route::get('admin/reset','reset');
    Route::get('admin/profile','profile');
    Route::get('admin/user_data','user_data');
    // Route::get('/delet_all_users','delet_all_users');
    Route::get('/dashboard','dashboard');
    Route::get('admin/cats_data','cats_data');
    Route::get('admin/video_data','video_data');
});

Route::controller(CatController::class)->group(function(){
    Route::get('admin/add_category','category');
    Route::post('admin/add_category','store');
    Route::delete('destroy/cat/{id}','destroy');
    // delete all category
    Route::get('/delet_all_cats','delet_all_cats');
    Route::get('/edit_status','edit_status');
});

Route::controller(VideoController::class)->group(function(){
    Route::get('admin/add_video','video');
    Route::post('admin/store','store');
    Route::delete('/destroy/{id}','destroy');
    // delete all videos
    Route::get('/delet_all_videos','delet_all_videos');
    Route::get('/movies','movies');
    Route::get('details/{id}','details');
    Route::post('update/{id}','update');
});

Route::controller(CommentController::class)->group(function(){
    // update profile
    Route::get('/create_comment','create_comment');
});
