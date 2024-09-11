<?php

use Illuminate\Support\Facades\Route;

// Route to render the React component through the Blade view
Route::get('/', function () {
    return view('app');
});
