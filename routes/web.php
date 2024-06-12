<?php

use Illuminate\Support\Facades\Route;

Route::get('/template', function() {
    return view('template');
});

Route::get('/dashboard', function() {
    return view('admin.dashboard.index');
});