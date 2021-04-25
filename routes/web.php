<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

//appel avec le controller
//donnez un nom permet de reutiliser le code plus facilement pour modifier un chemin etc...
Route::get('/', [PostController::class, 'index'])->name('welcome');
//verification avec whereNumber
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');

//reponse en json
/* Route::get('/posts', function () {
    return response()->json([
        'title' => 'mon super titre',
        'description' => 'ma super desccription'
    ]);
}); */
/* 
Route::get('articles', function (){
    return view('articles');
}); */


