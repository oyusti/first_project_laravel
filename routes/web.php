<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;


Route::controller(PageController::class)->group(function(){
    Route::get('/',                 'home')->name('home');
    Route::get('blog/{post:slug}',   'post')->name('post');
});

//Agregamos la ruta y todos los recursos disponibles menos "show"
Route::resource('posts', PostController::class)->middleware(['auth'])->except('show');//linea agregada

Route::redirect('dashboard', 'posts')->name('dashboard');

//Agregamos la ruta y todos los recursos disponibles menos "show"
//Route::resource('posts', PostController::class)->except('show');//linea agregada


/* Route::get('/', function () {
    return view('welcome');
}); */

require __DIR__.'/auth.php';
