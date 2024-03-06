<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\PigController;
use App\Http\Controllers\FishController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/to_hello', function () {
//     return view('hello');
// });


Route::get('/hello', function () {
    // return view('hello');
});

// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::get('/hello', [CatController::class, 'hello']);
Route::get('/hello', [CatController::class, 'testAction']);
Route::get('/dog_run', [DogController::class, 'run']);



 
Route::resource('pigs', PigController::class);
Route::resource('fishs', FishController::class);