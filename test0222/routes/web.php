<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     // return view('test');\
//     // dd('view');
//     $sum=0;
//     for ($i=0; $i <=10 ; $i++) { 
//         $sum+=$i;
//     }
//     dd($sum);
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/go_taisan', function () {
    return view('taisan');
});

Route::get('/f1', function () {
    return view('hotel.f1');
})->name('route.f1');

Route::get('/f2', function () {
    return view('hotel.f2');
})->name('route.f2');

Route::get('/f3', function () {
    return view('hotel.f3');
})->name('route.f3');


Route::get('/students', function () {
    return view('student.index');
});

Route::get('/user/{id}', function (string $id) {
    // return 'User '.$id;
    dd($id);
});

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    $text=$postId."_".$commentId."_";
    dd($text);
});

Route::get('/', function () {
    // $url=route('route.f3');
    // dd($url);
    return view('index',['name'=>'WSL','tel'=>'0955-555-555']);
});