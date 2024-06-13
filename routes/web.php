<?php

use App\Http\Controllers\Admin\AdminBrandController;
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