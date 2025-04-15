<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RapportController;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Tableau de bord (authentifié + vérifié)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes pour le profil utilisateur connecté
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    // CRUD des entités principales
    Route::resource('utilisateurs', UtilisateurController::class);
    /*Route::resource('modules', ModuleController::class);
    Route::resource('applications', ApplicationController::class);
    Route::resource('projets', ProjetController::class);
    Route::resource('taches', TacheController::class);
    Route::resource('factures', FactureController::class);
    Route::resource('paiements', PaiementController::class);
    Route::resource('messages', MessageController::class);
    Route::resource('notifications', NotificationController::class);
    Route::resource('rapports', RapportController::class);*/


// Auth routes (login/register/etc.)
require __DIR__.'/auth.php';
