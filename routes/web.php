<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\RetiroController;
use App\Http\Controllers\DepositoController;

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
    return view('welcome');
});


Route::resource('/afiliado', 'App\Http\Controllers\AfiliadoController');

Route::resource('/empleado', 'App\Http\Controllers\EmpleadoController');

Route::resource('/retiros', 'App\Http\Controllers\RetiroController');

Route::get('/retiros/{id}/{id2}', [RetiroController::class, 'show']);



Route::get('/retiros/create/{id}/{id2}', [RetiroController::class, 'create']);

Route::resource('/depositos', 'App\Http\Controllers\DepositoController');

Route::get('/depositos/{id}/{id2}', [DepositoController::class, 'show']);

Route::get('/depositos/create/{id}/{id2}', [DepositoController::class, 'create']);

Route::get('/afiliado/{id}/delete', 'App\Http\Controllers\AfiliadoController@delete')->name('afiliado.delete');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
