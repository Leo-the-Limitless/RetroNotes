<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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
    return view('home');
});

Route::get('/send', [NoteController::class, 'index']);

Route::get('/send/{stamp}', [NoteController::class, 'fill'])->middleware('checkStamp');
Route::post('/send/{stamp}', [NoteController::class, 'filled'])->middleware('checkStamp');