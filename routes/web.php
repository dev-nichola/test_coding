<?php

use Illuminate\Support\Facades\Route;

Route::get('/template', function() {
    return view('template');
});