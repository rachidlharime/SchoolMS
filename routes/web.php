<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\AdminController;

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

Route::middleware('auth')->group(function(){
    
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/teachers/{subject?}', [TeacherController::class, 'index'])->name('teachers')->middleware('admin');

    Route::get('/teachers/new', [TeacherController::class, 'form'])->middleware('admin');
    
    Route::post('/teachers/add', [TeacherController::class, 'add'])->middleware('admin');
    
    Route::get('/teachers/account/{id}', function($id) {
        return view('teachers.account',['id'=> $id, 'title'=>'SchoolMS - New account']);
    })->name('teacherAccount')->middleware('admin');
    
    Route::post('/teachers/add/account/{id}', [TeacherController::class, 'account'])->middleware('admin');
    
    Route::get('/teachers/edit/{id}', [TeacherController::class, 'edit'])->middleware('admin');
    
    Route::post('/teachers/update/{id}', [TeacherController::class, 'update'])->middleware('admin');
    
    Route::get('/teachers/remove/{id}', [TeacherController::class, 'remove'])->middleware('admin');

    Route::get('/students', [StudentController::class, 'index'])->name('students')->middleware('admin_teacher');

    Route::get('/students/new', [StudentController::class, 'form'])->middleware('admin');
    
    Route::post('/students/add', [StudentController::class, 'add'])->middleware('admin');
    
    Route::get('/students/account/{id}', function($id) {
        return view('students.account',['id'=> $id, 'title'=>'SchoolMS - New account']);
    })->name('studentAccount')->middleware('admin');
    
    Route::post('/students/add/account/{id}', [StudentController::class, 'account'])->middleware('admin');
    
    Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->middleware('admin');
    
    Route::post('/students/update/{id}', [StudentController::class, 'update'])->middleware('admin');
    
    Route::get('/students/remove/{id}', [StudentController::class, 'remove'])->middleware('admin');

    Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects')->middleware('admin');

    Route::get('/subjects/new', [SubjectController::class, 'form'])->middleware('admin');
    
    Route::post('/subjects/add', [SubjectController::class, 'add'])->middleware('admin');
    
    Route::get('/subjects/edit/{id}', [SubjectController::class, 'edit'])->middleware('admin');
    
    Route::post('/subjects/update/{id}', [SubjectController::class, 'update'])->middleware('admin');
    
    Route::get('/subjects/remove/{id}', [SubjectController::class, 'remove'])->middleware('admin');

    Route::get('/grades', [GradeController::class, 'index'])->name('grades');
    
    Route::get('/grades/new/{id?}', [GradeController::class, 'form'])->middleware('teacher');
    
    Route::post('/grades/add', [GradeController::class, 'add'])->middleware('teacher');
    
    Route::get('/grades/edit/{id}', [GradeController::class, 'edit'])->middleware('teacher');
    
    Route::post('/grades/update/{id}', [GradeController::class, 'update'])->middleware('teacher');
    
    Route::get('/grades/remove/{id}', [GradeController::class, 'remove'])->middleware('teacher');
    
    Route::get('/settings/username', [AdminController::class, 'editUsername'])->middleware('admin');

    Route::post('/username/update', [AdminController::class, 'updateUsername'])->middleware('admin');
    
    Route::get('/settings/password', [AdminController::class, 'editPassword'])->middleware('admin');

    Route::post('/password/update', [AdminController::class, 'updatePassword'])->middleware('admin');

});