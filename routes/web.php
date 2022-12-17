<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::group(( ['middleware' => 'auth']), function(){
Route::get('logout', [LoginController::class, 'logout']);
Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/kontak', function () {
return view('kontak.index');
 });
Route::get('/tentang', function () {
    return view('tentang.index');
 });
Route::get('/data', [DataController::class, 'index']);
Route::get('/data/create', [DataController::class, 'create']);
Route::post('/data', [DataController::class, 'store']);
Route::get('/data/{id}/edit', [DataController::class, 'edit']);
Route::put('/data/{id}', [DataController::class, 'update']);
Route::delete('/data/{id}', [DataController::class, 'destroy']);
});

//Route::get('/test/{x}', [DataController::class, 'fuzzyfikasi_naik']);
//Route::get('fuzzy-main/{data}', [DataController::class,'main1']);
//Route::get('fuzzyfikasi', [DataController::class, 'indexHasil']);
//Route::get('query', [DataController::class, 'indexQuery']);
