<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'login'] );

Route::get('offres/show/{data_cat}', [OffreController::class, 'show'])->name('offre.show');
Route::get('/offres/edit/{id}', [OffreController::class,'edit'])->name('offre.edit');
Route::delete('/offres/destroy/{id}', [OffreController::class, 'destroy'])->name('offre.destroy');

Route::post('/modifieroffres/{id}', [OffreController::class, 'validerOffre'])->name('validerOffre');
Route::post('/ajouteroffres', [OffreController::class, 'ajouterOffre'])->name('ajouterOffre');


Route::get('/offresdetail/view/{id}', [OffreController::class,'editdetails'])->name('validerDetailOffre');
Route::post('/offresdetail/edit/{id}', [OffreController::class,'validerDetailOffre'])->name('validerDetailOffre');
Route::delete('/offresdetail/destroy/{id}', [OffreController::class, 'destroydetails'])->name('editdetails.destroy');

Route::post('/ajouterDetailoffres', [OffreController::class, 'ajouterDetailOffre'])->name('ajouterDetailOffre');

Route::get('/modify', [OffreController::class, 'modify'] );









Route::get('/about', [PageController::class, 'about'] );
Route::get('/service', [PageController::class, 'service'] );
Route::get('/Basiclesson/public/show/{id}', [PageController::class, 'show'] );
Route::get('/create', [PageController::class, 'create'] );
Route::post('/saverproduit', [PageController::class, 'saverproduit'] );


