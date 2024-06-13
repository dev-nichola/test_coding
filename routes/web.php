<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminBrandController;
use App\Http\Controllers\Admin\AdminMobilController;
use App\Http\Controllers\Admin\AdminModelBrandController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RentController;

Route::get('/template', function() {
    return view('template');
});

Route::get('/dashboard', function() {
    return view('admin.dashboard.index');
});


Route::middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/brand', [AdminBrandController::class, 'index'])->name('brand');
    Route::get('/brand/create', [AdminBrandController::class, 'create'])->name('brand.create');
    Route::get('/brand/edit', [AdminBrandController::class, 'edit'])->name('brand.edit');
    
    Route::get('/model', [AdminModelBrandController::class, 'index'])->name('model');
    Route::get('/model/create', [AdminModelBrandController::class, 'create'])->name('model.create');
    Route::get('/model/edit', [AdminModelBrandController::class, 'edit'])->name('model.edit');
    
    Route::get('/mobil', [AdminMobilController::class, 'index'])->name('mobil');
    Route::get('/mobil/create', [AdminMobilController::class, 'create'])->name('mobil.create');
    Route::post('/mobil/store', [AdminMobilController::class, 'store'])->name('mobil.store');
});

Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'credential'])->name('credentials');
});

Route::get('/', [PagesController::class, 'index']);
Route::get('/detail/{slug}', [PagesController::class, 'show'])->name('detail');
Route::get('/detail/{slug}/rent', [RentController::class, 'rent'])->name('rent');
Route::post('/detail/rent', [RentController::class, 'saveCustomer'])->name('rent.car');




