<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\EquipesController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\CommandesController;
use App\Http\Controllers\Admin\FormationsController;
use App\Http\Controllers\Admin\ParametresController;
use App\Http\Controllers\Admin\NewslettersController;
use App\Http\Controllers\Admin\Rendez_vousController;
use App\Http\Controllers\Admin\UtilisateursController;
use App\Http\Controllers\Admin\ServicesPhotoController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [SiteController::class, 'index'])->name('home');
    Route::resource('/admin/utilisateurs',UtilisateursController::class);
    Route::resource('/admin/commandes',CommandesController::class);
    Route::resource('/admin/contacts',ContactsController::class);
    Route::resource('/admin/formations',FormationsController::class);
    Route::resource('/admin/equipes',EquipesController::class);
    Route::resource('/admin/articles',ArticlesController::class);
    Route::resource('/admin/newsletters',NewslettersController::class);
    Route::resource('/admin/services',ServicesController::class);
    Route::resource('/admin/rendez_vous',Rendez_vousController::class);
    Route::resource('/admin/parametres',ParametresController::class);
    Route::resource('/admin/services_photo',ServicesPhotoController::class);
    

});
Route::resource('/admin/articlee',ArticlesController::class);