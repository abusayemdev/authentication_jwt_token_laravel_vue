<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('example');
});

Route::get('/{vue_capture?}', function(){
    return view('example');
})->where('vue_capture', '[\/\w\.-]*');


Route::get('/home', [HomeController::class, 'index']);

Route::post('/savedata', [HomeController::class, 'savedata']);

Route::get('/api/categories', [HomeController::class, 'getAllCategories']);

Route::post('/api/forgetuser', [HomeController::class, 'forget']);

Route::post('/api/newpassword', [HomeController::class, 'newpassword']);