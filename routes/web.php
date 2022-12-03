<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/registrasi', [RegisterController::class, 'index']);
// Route::get('/login', [LoginController::class, 'index']);


Route::get('/beranda', [BerandaController::class, 'index']);

Route::get('/data', [DataController::class, 'index']);
Route::get('/data/create', [DataController::class, 'create']);
Route::post('/data', [DataController::class, 'store']);
Route::get('/data/{id}/edit', [DataController::class, 'edit']);
Route::put('/data/{id}', [DataController::class, 'update']);
Route::delete('/data/{id}', [DataController::class, 'destroy']);
Route::get('/test/{x}', [DataController::class, 'fuzzyfikasi_naik']);
Route::get('fuzzy-main/{data}', [DataController::class,'main1']);
Route::get('fuzzyfikasi', [DataController::class, 'indexHasil']);
