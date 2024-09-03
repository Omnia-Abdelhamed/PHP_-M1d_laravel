<?php

// routes folder => web.php
// app/http/controllers =>
// resurces/views

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test',[TestController::class,'index']);

// Route::get('/test1',function(){
//     return 'test1 page';
// });
// Route::get('/test2',function(){
//     return 'test2 page';
// });
Route::get('/test1',[TestController::class,'index']);
Route::get('/test2',function(){
    return "test2";
});
Route::controller(ProductController::class)->prefix('admin')->name('admin.products.')->group(function(){
    Route::get('/products','getAll')->name('getAll');
    Route::get('/products/{id}/{name}','show')->where('id','[0-9]+')->name('show');
});
Route::controller((StudentController::class))->name('students.')->group(function(){
    Route::get('/students','index')->name('index');
});

Route::prefix('admin')->group(function(){
    Route::resource('/doctors',DoctorController::class)->except('edit');
});
Route::get('/home',HomeController::class);
// Route::view('/test2','admin.products.getAll');
// Route::redirect('/test1','/test2');
