<?php

use App\Http\Controllers\MovieController;
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

//Route::get('/movie', [MovieController::class, 'index'])->name('movie.index');
Route::get('/', function () {
    return view('welcome');
});
Route::any('/movie',[MovieController::class,'index']);
Route::resource('movie',MovieController::class);


//Model-View-Controller MVC(layour do resultado que o laravel te retorna a partir do controller)
