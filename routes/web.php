<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\TrainingcenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Models\Area;
use App\Models\Trainingcenter;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Apprendice;
use App\Models\Teacher;

//Rutas Area
Route::get('Areas', [AreaController::class, 'index'])->name('Area.index');
Route::get('Areas/create', [AreaController::class, 'create'])->name('Area.create');
Route::post('Areas/store', [AreaController::class, 'store'])->name('Area.store');
Route::get('Areas/{Area}', [AreaController::class, 'show'])->name('Area.show');
Route::put('Areas/{Area}', [AreaController::class, 'update'])->name('Area.update');
Route::delete('Areas/{Area}', [AreaController::class, 'destroy'])->name('Area.destroy');
Route::get('Areas/{Area}/edit', [AreaController::class, 'edit'])->name('Area.edit');

//Rutas Aprendiz
Route::get('Apprentice', [ApprenticeController::class, 'index'])->name('Apprentice.index');
Route::get('Apprentice/create', [ApprenticeController::class, 'create'])->name('Apprentice.create');
Route::post('Apprentice/store', [ApprenticeController::class, 'store'])->name('Apprentice.store');
Route::get('Apprentice/{Apprentice}', [ApprenticeController::class, 'show'])->name('Apprentice.show');
Route::put('Apprentice/{Apprentice}', [ApprenticeController::class, 'update'])->name('Apprentice.update');
Route::delete('Apprentice/{Apprentice}', [ApprenticeController::class, 'destroy'])->name('Apprentice.destroy');
Route::get('Apprentice/{Apprentice}/edit', [ApprenticeController::class, 'edit'])->name('Apprentice.edit');




//Rutas trainingcenter
Route::get('Trainingcenters', [TrainingcenterController::class, 'index'])->name('Trainingcenter.index');
Route::get('Trainingcenters/create', [TrainingcenterController::class, 'create'])->name('Trainingcenter.create');
Route::post('Trainingcenters/store', [TrainingcenterController::class, 'store'])->name('Trainingcenter.store');
Route::get('Trainingcenters/{Trainingcenter}', [TrainingcenterController::class, 'show'])->name('Trainingcenter.show');
Route::put('Trainingcenters/{Trainingcenter}', [TrainingcenterController::class, 'update'])->name('Trainingcenter.update');
Route::delete('Trainingcenters/{Trainingcenter}', [TrainingcenterController::class, 'destroy'])->name('Trainingcenter.destroy');
Route::get('Trainingcenters/{Trainingcenter}/edit', [TrainingcenterController::class, 'edit'])->name('Trainingcenter.edit');


//Rutas computer
Route::get('Computers', [ComputerController::class, 'index'])->name('Computer.index');
Route::get('Computers/create', [ComputerController::class, 'create'])->name('Computer.create');
Route::post('Computers/store', [ComputerController::class, 'store'])->name('Computer.store');
Route::get('Computers/{Computer}', [ComputerController::class, 'show'])->name('Computer.show');
Route::put('Computers/{Computer}', [ComputerController::class, 'update'])->name('Computer.update');
Route::delete('Computers/{Computer}', [ComputerController::class, 'destroy'])->name('Computer.destroy');
Route::get('Computers/{Computer}/edit', [ComputerController::class, 'edit'])->name('Computer.edit');

//Rutas Teacher
Route::get('Teachers', [TeacherController::class, 'index'])->name('Teacher.index');
Route::get('Teachers/create', [TeacherController::class, 'create'])->name('Teacher.create');
Route::post('Teachers/store', [TeacherController::class, 'store'])->name('Teacher.store');
Route::get('Teachers/{Teacher}', [TeacherController::class, 'show'])->name('Teacher.show');
Route::put('Teachers/{Teacher}', [TeacherController::class, 'update'])->name('Teacher.update');
Route::delete('Teachers/{Teacher}', [TeacherController::class, 'destroy'])->name('Teacher.destroy');
Route::get('Teachers/{Teacher}/edit', [TeacherController::class, 'edit'])->name('Teacher.edit');

//Rutas course
Route::get('Courses', [CourseController::class, 'index'])->name('Course.index');
Route::get('Courses/create', [CourseController::class, 'create'])->name('Course.create');
Route::post('Courses/store', [CourseController::class, 'store'])->name('Course.store');
Route::get('Courses/{Course}', [CourseController::class, 'show'])->name('Course.show');
Route::put('Courses/{Course}', [CourseController::class, 'update'])->name('Course.update');
Route::delete('Courses/{Course}', [CourseController::class, 'destroy'])->name('Course.destroy');
Route::get('Courses/{Course}/edit', [CourseController::class, 'edit'])->name('Course.edit');




