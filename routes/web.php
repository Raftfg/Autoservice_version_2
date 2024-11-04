<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ArticlesController;

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


//index
Route::get('/', [SiteController::class, 'accueil'])->name('accueil');

//accueil
Route::get('/accueil', [SiteController::class, 'accueil'])->name('accueil');


//equipe
Route::get('/equipe', [SiteController::class, 'equipe'])->name('equipe');

//gallery
Route::get('/gallery', [SiteController::class, 'gallery'])->name('gallery');

//localisation
Route::get('/localisation', [SiteController::class, 'localisation'])->name('localisation');

//reparation
Route::get('/service/{id}', [SiteController::class, 'service'])->name('service');

//reparation
Route::get('/entretien', [SiteController::class, 'entretien'])->name('entretien');

//rendezvous
Route::get('/rendezvous', [SiteController::class, 'rendezvous'])->name('rendezvous');

//rendezvoustraite
Route::get('/rendezvoustraite', [SiteController::class, 'rendezvoustraite'])->name('rendezvoustraite');
Route::post('/rendezvousform', [SiteController::class, 'rendezvousform'])->name('rendezvousform');

//devis
Route::get('/devis', [SiteController::class, 'devis'])->name('devis');

// routes/web.php
Route::get('/articles/{id}', [ArticlesController::class, 'show'])->name('articles.show');



//contactez-nous
Route::get('/contacteznous', [SiteController::class, 'contacteznous'])->name('contacteznous');
Route::post('/contactez', [SiteController::class, 'contactez'])->name('contactez');

Route::match(['get', 'post'], '/layouts.partials.footer', [SiteController::class, 'newsletter'])->name('newsletter');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';