<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\impController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified',])->name('dashboard');

Route::get('/informe', function () {
    return view('informe');
})->middleware(['auth', 'verified',])->name('informe');

Route::get('/tabulador', function () {
    return view('tabulador');
})->middleware(['auth', 'verified',])->name('tabulador');

Route::get('/imprimir-pdf', [impController::class, 'imp']);


require __DIR__.'/auth.php';
