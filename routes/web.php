<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/word-count', [WordController::class,'wordCount'])->name('word-count');
Route::post('/get-result', [WordController::class,'result'])->name('word-result');

Route::get('/add-student',[StudentController::class, 'addStudent'])->name('students-add');
Route::post('/new-student',[StudentController::class, 'newStudent'])->name('students.store');
Route::get('/manage-student',[StudentController::class, 'manageStudent'])->name('students-manage');
