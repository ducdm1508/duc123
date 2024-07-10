<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix("admin")->group(function () {
    Route::get('/category',[CategoryController::class,"index"]);
});
