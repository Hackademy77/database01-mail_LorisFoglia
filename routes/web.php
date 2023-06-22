<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, "showArtist"])->name('home');

Route::get('/artist/create', [PublicController::class, "crea"])->name('artista.crea');

Route::post('/artist/store', [PublicController::class, "store"])->name('artista.store');

Route::get('/artist/create', [PublicController::class, "crea"])->name('artista.crea');

Route::get('/artist/dettagli/{id}', [PublicController::class, "showDettagli"])->name('show.dettagli');

Route::get('/cerca', [PublicController::class, "cercaArtista"])->name('cerca.artista');

Route::get('/contattaci', [PublicController::class, "contattaci"])->name('contattaci');

Route::post('/messaggi', [PublicController::class, "messaggiRicevuti"])->name('messaggiRicevuti');

Route::get('/arrivederci', [PublicController::class, "arrivederci"])->name('arrivederci');