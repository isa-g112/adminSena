<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use App\Models\Apprentice;
use App\Models\Trainingcenter;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/*  Route::get('computers', [ComputerController::class,'index'])->name('api.v1.computers.index');
 Route::post('computers', [ComputerController::class,'store'])->name('api.v1.computers.store');
 Route::get('computers/{computer}', [ComputerController::class,'show'])->name('api.v1.computers.show');

//Route::apiResource('computers', ComputerController::class)->names('api.v1.computers');

 Route::get('aprentices', [AprenticeController::class,'index'])->name('api.v1.aprentices.index');
 Route::post('aprentices', [AprenticeController::class,'store'])->name('api.v1.aprentices.store');
 Route::get('aprentices/{computer}', [AprenticeController::class,'show'])->name('api.v1.aprentices.show'); */

 //Route::apiResource('computers', ComputerController::class)->names('api.v1.computers');

//Route::apiResource('apprentices', Apprentice::class)->names('api.v1.apprentices');

//Route::apiResource('areas', AreaController::class)->names('api.v1.areas');

//Route::apiResource('trainingCenters', TrainingCenterController::class)->names('api.v1.trainingCenters');

//Route::apiResource('teachers', TeacherController::class)->names('api.v1.teachers');

//Route::apiResource('courses', CourseController::class)->names('api.v1.courses');

//rutas tabla areas
Route::get('areas', [AreaController::class, 'index'])->name('api.v1.area.index');
Route::post('areas/store', [AreaController::class, 'store'])->name('api.v1.area.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('api.v1.area.show');

//rutas tabla apprentices
Route::get('apprentices', [ApprenticeController::class, 'index'])->name('api.v1.apprentice.index');
Route::post('apprentices/store', [ApprenticeController::class, 'store'])->name('api.v1.apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('api.v1.apprentice.show');

//rutas tabla computers
Route::get('computers', [ComputerController::class, 'index'])->name('api.v1.computer.index');
Route::post('computers/store', [ComputerController::class, 'store'])->name('api.v1.computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('api.v1.computer.show');
 

