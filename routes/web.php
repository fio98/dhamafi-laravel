<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class);
Route::get('acerca', [LandingPagesController::class, 'showAcercaDe'])->name('landing.acercade');
Route::get('productos', [LandingPagesController::class, 'showProductos'])->name('landing.productos');
Route::get('recetas', [LandingPagesController::class, 'showRecetas'])->name('landing.recetas');
Route::get('contacto', [LandingPagesController::class, 'showContacto'])->name('landing.contacto');

