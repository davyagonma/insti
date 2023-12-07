<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AdminController::class, 'login'] );

Route::get('/show/{id}', [OffreController::class, 'show'])->name('offre.show');
Route::get('/edit/{id}', [OffreController::class,'edit'])->name('offre.edit');
Route::get('/offres/destroy/{id}', [OffreController::class,'destroy'])->name('offre.destroy');


Route::get('/modify', [AdminController::class, 'modify'] );









Route::get('/about', [PageController::class, 'about'] );
Route::get('/service', [PageController::class, 'service'] );
Route::get('/Basiclesson/public/show/{id}', [PageController::class, 'show'] );
Route::get('/create', [PageController::class, 'create'] );
Route::post('/saverproduit', [PageController::class, 'saverproduit'] );


