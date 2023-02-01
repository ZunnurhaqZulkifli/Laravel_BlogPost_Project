<?php

// use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'home'])
    ->name ('home');
    // ->middleware('auth');

Route::get('/contact', [HomeController::class, 'contact'])
    ->name ('contact');

Route::get('/zunnur', [HomeController::class, 'zunnur'])
    ->name('zunnur');

Route::resource('posts' , PostController::class);

Auth::routes();

// Route::get('/', [HomeController::class])->name('home');
// Route::get('/contact', [HomeController::class])->name('contact');
// Route::get('/', 'HomeController@index')->name('home');
    // ->only(['index' , 'show' , 'create' , 'store' , 'edit' , 'update']);


// Route::get('/posts', function() use($posts) {
// //    dd(request()->all());
//     dd((int)request()->query('page' , 1));


//     return view('posts.index' , ['posts' => $posts]);

// });

// Route::get('/posts/{id}',  function ($id) use($posts) {
//     abort_if(!isset($posts[$id]), 404);

//     return view('posts.show' , ['post' => $posts[$id]]);
// })->name ('posts.show');

// Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
//     return 'Posts from ' .  $daysAgo . ' days ago' ;  
// })->name ('posts.recent.index')->middleware('auth');


