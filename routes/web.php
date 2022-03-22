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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/test', function () {
//     return view('test', ['name' => 'mai','age','age'=>66]);
// });

//  Route::get('/test', function () {

//     $posts=[

//         ['id'=>1,'title'=>'laravel','posted-by'=>'hosam','created-at'=>'23-2-2022'],
//         ['id'=>2,'title'=>'js','posted-by'=>'andrew','created-at'=>'7-1-2022'],
//         ['id'=>3,'title'=>'php','posted-by'=>'hend','created-at'=>'9-3-2022'],
// ];  
//  return view('test',[
//            'posts'=>$posts
//        ]);
// });

//Route::get('test2',[TestController::class,'testAction']);
// dd(TestController::class);
// Route::get('test3','App\Http\Controllers\TestController@testAction');
// Route::get('posts',[TestController::class,'testAction']);
Route::get('posts',[PostController::class,'index'])->name('posts.index');//list all posts

Route::get('posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('posts',[PostController::class,'store'])->name('posts.store');

Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');// show one post only
Route::delete('posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
