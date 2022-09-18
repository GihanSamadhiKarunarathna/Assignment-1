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

Route::get('/', function ()
{
    return view('welcome');
});

//Route::resource('/student', \App\Http\Controllers\NewStudentController::class);
//
Route::get('/student/index',[StudentController::class,'index'])->name('student.index');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/student/update',[StudentController::class,'update'])->name('student.update');
Route::get('/student/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
Route::get('/student/view/{id}',[StudentController::class,'viewStudent'])->name('student.view');


//Route::get('/',"NewStudentController@index");
//Route::get('/edit/{id}',"NewStudentController@edit");
//Route::get('/show/{id}',"NewStudentController@show");
//Route::get('/create',"NewStudentController@create");
//Route::post('/store',"NewStudentController@store");
//Route::post('/update/{id}',"NewStudentController@update");
