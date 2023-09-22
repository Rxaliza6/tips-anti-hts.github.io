<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post('/play', [MusicController::class], 'play');
// Route::post('/daftar-akun/tambah', [DaftarakunController::class, 'daftarakun']);

Route::get('/music-player', function () {
    return view('music-player');
});
