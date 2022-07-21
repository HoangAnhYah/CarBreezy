<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarDetailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Car
Route::get('/car', function () {
    return view('car');
});
Route::post('/detail', [CarController::class, 'show']);
Route::post('/edit', [CarController::class, 'edit']);

//Add new car
Route::get('/addcar', function () {
    return view('addcar');
});
Route::post('/createcar', [CarController::class, 'createcar']);
Route::get('/test', [CarDetailController::class, 'create']);
