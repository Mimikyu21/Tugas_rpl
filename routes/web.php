<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    // check apakah sudah login
    if (Auth::check()) {
        return view('homepage');//sudah login
    } 
      else {
         return redirect('login2');//belum login
     }
});



Route::group([
    'middleware' => ['guest']
], function() {
    // register
    Route::get('/daftar', function() {
        return view('register2');
    });
    // Route::get('/daftar', [UserController ::class, 'Showform']);
    Route::post('/daftar', [UserController ::class, 'Register']); //untuk method post di form php
    
    //login, logout, verify, forgot-password.
    
    Route::get('/login', [UserController ::class, 'showloginform'])->name('login');
    Route::post('/login', [UserController ::class, 'login_user'])->name('post.login-user');
});

//kalo dah login akses bawah ini 


//review user
Route::get('/review', [UserController ::class, 'ShowUlasan'])
->middleware('auth')
->name('review');

Route::post('/review', [UserController ::class, 'store_ulasan'])
->name('post.store_ulasan');





// route logout
Route::get('/logout',[UserController ::class, 'log_out'])
->middleware('auth')
->name('logout');

//gallery routes

Route::get('/gambar',[UserController ::class, 'show_img'])
->middleware('auth')
->name('gallery');

// Route::get('/gambar', function (){
//     return view('galery2');
// })
// ->middleware('auth')
// ->name('gallery');

Route::post('/gambar', [UserController ::class, 'store_image'])
->name('post.gallery');



// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/review', function() {
//     return view('review2');
// })->name('review');