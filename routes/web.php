<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;





Route::get('Areas', [AreaController::class, 'index'])->name('Area.index');
Route::get('Areas/create', [AreaController::class, 'create'])->name('Area.create');
Route::post('Areas/store', [AreaController::class, 'store'])->name('Area.store');
