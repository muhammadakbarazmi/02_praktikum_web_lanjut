<?php

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticlesController;
// //namespace App\Http\Controllers;
// use App\Http\Controllers;
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

//Praktikum 1
// Route::get('/', function () {
//     echo('Selamat Datang');
// });

// Route::get('/about', function() {
//     return "NIM = 1941720074 <br> Nama = Muhammad Akbar Azmi";
// });

// Route::get('/articles/{id}', function($id){
//     return "Halaman artikel dengan ID".$id;
// });

// Praktikum 2
// Page Controller
// Route::get('/index', [App\Http\Controllers\PageController::class, 'index']);

// Route::get('/about', [App\Http\Controllers\PageController::class, 'about']);

// Route::get('/articles/{id}', [App\Http\Controllers\PageController::class, 'articles']);

//Modifikasi Praktikum 2 
// Route::get('/',[HomeController::class,'index']);

// Route::get('about',[AboutController::class,'about']);

// Route::get('/articles/{id}',[ArticlesController::class,'articles']);



// Praktikum 3
Route::get('/', function () {
    return '<a href="https://www.educastudio.com/">Home</a>';
    });

    Route::prefix('/products')->group(function () {
    Route::get('/edugame', [Praktikum3Controller::class, 'edugame']);
    Route::get('/friendkids', [Praktikum3Controller::class, 'friendkids']);
    Route::get('/storybooks', [Praktikum3Controller::class, 'storybooks']);
    Route::get('/kidsongs', [Praktikum3Controller::class, 'kidsongs']);
    });
   
    Route::get('/berita', [Praktikum3Controller::class, 'berita']);

    Route::prefix('/program')->group(function () {
    Route::get('/karir', [Praktikum3Controller::class, 'karir']);
    Route::get('/magang', [Praktikum3Controller::class, 'magang']);
    Route::get('/industri', [Praktikum3Controller::class, 'industri']);
   });

    Route::get('/about', function () {
    return '<a href="https://www.educastudio.com/about-us">about us</a>';
    });

    Route::resource('kontak', KontakController::class);