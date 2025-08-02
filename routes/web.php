<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\MoniteurController;
use App\Http\Controllers\EmploieTempController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\PaiementController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Routes Users
Route::resource('users', UserController::class);

// Routes Élèves
Route::resource('eleves', EleveController::class);

// Routes Moniteurs
Route::resource('moniteurs', MoniteurController::class);

// Routes Emplois du temps
Route::resource('emploie_temps', EmploieTempController::class);

// Routes Cours
Route::resource('cours', CoursController::class);

// Routes Véhicules
Route::resource('vehicules', VehiculeController::class);

// Routes Examens
Route::resource('examens', ExamenController::class);

// Routes Paiements
Route::resource('paiements', PaiementController::class);
