<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[StudentController::class,'index'])->name('all.student');

Route::get('/student/add',[StudentController::class,'addStudent'])->name('add.student');

Route::post('/student/create',[StudentController::class,'createStudent'])->name('create.student');

Route::delete('/student/delete',[StudentController::class,'delete'])->name('delete.student');
