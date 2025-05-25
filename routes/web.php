<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingcenterController;
use App\Http\Controllers\ComputerController;


//Rutas Area
Route::get('Areas', [AreaController::class, 'index'])->name('Area.index');
Route::get('Areas/create', [AreaController::class, 'create'])->name('Area.create');
Route::post('Areas/store', [AreaController::class, 'store'])->name('Area.store');
Route::get('Areas/{Area}', [AreaController::class, 'show'])->name('Area.show');
Route::put('Areas/{Area}', [AreaController::class, 'update'])->name('Area.update');
Route::delete('Areas/{Area}', [AreaController::class, 'destroy'])->name('Area.destroy');
Route::get('Areas/{Area}/edit', [AreaController::class, 'edit'])->name('Area.edit');




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
Route::get('Teachers', [ComputerController::class, 'index'])->name('Teacher.index');
Route::get('Teachers/create', [ComputerController::class, 'create'])->name('Teacher.create');
Route::post('Teachers/store', [ComputerController::class, 'store'])->name('Teacher.store');
Route::get('Teachers/{Computer}', [ComputerController::class, 'show'])->name('Teacher.show');
Route::put('Teachers/{Computer}', [ComputerController::class, 'update'])->name('Teacher.update');
Route::delete('Teachers/{Computer}', [ComputerController::class, 'destroy'])->name('Teacher.destroy');
Route::get('Teachers/{Computer}/edit', [ComputerController::class, 'edit'])->name('Teacher.edit');

//Rutas course
Route::get('Courses', [ComputerController::class, 'index'])->name('Course.index');
Route::get('Courses/create', [ComputerController::class, 'create'])->name('Course.create');
Route::post('Courses/store', [ComputerController::class, 'store'])->name('Course.store');
Route::get('Courses/{Computer}', [ComputerController::class, 'show'])->name('Course.show');
Route::put('Courses/{Computer}', [ComputerController::class, 'update'])->name('Course.update');
Route::delete('Courses/{Computer}', [ComputerController::class, 'destroy'])->name('Course.destroy');
Route::get('Courses/{Computer}/edit', [ComputerController::class, 'edit'])->name('Course.edit');
