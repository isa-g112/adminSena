<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingcenterController;
use App\Http\Controllers\ComputerController;


//Rutas Area
Route::get('Areas', [AreaController::class, 'index'])->name('Area.index');
Route::get('Areas/create', [AreaController::class, 'create'])->name('Area.create');
Route::post('Areas/store', [AreaController::class, 'store'])->name('Area.store');


//Rutas trainingcenter
Route::get('Trainingcenters', [TrainingcenterController::class, 'index'])->name('Trainingcenter.index');
Route::get('Trainingcenters/create', [TrainingcenterController::class, 'create'])->name('Trainingcenter.create');
Route::post('Trainingcenters/store', [TrainingcenterController::class, 'store'])->name('Trainingcenter.store');

//Rutas computer
Route::get('Computers', [ComputerController::class, 'index'])->name('Computer.index');
Route::get('Computers/create', [ComputerController::class, 'create'])->name('Computer.create');
Route::post('Computers/store', [ComputerController::class, 'store'])->name('Computer.store');
