<?php

use App\Http\Controllers\ProfileController;

Route::get("/", function () {
    return view("welcome");
});

Route::get('/profile', [ProfileController::class, 'index']);
