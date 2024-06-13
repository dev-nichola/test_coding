<?php

use App\Http\Controllers\Admin\AdminBrandController;
use App\Http\Controllers\Admin\AdminModelBrandController;
use Illuminate\Support\Facades\Route;

Route::get('/template', function() {
    return view('template');
});

Route::get('/dashboard', function() {
    return view('admin.dashboard.index');
});

Route::get('/brand', [AdminBrandController::class, 'index'])->name('brand');
Route::get('/brand/create', [AdminBrandController::class, 'create'])->name('brand.create');
Route::get('/brand/edit', [AdminBrandController::class, 'edit'])->name('brand.edit');

Route::get('/model', [AdminModelBrandController::class, 'index'])->name('model');
Route::get('/model/create', [AdminModelBrandController::class, 'create'])->name('model.create');
Route::get('/model/edit', [AdminModelBrandController::class, 'edit'])->name('model.edit');