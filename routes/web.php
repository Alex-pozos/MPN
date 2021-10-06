<?php

use App\Http\Controllers\AlianzasTSocialController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\CampañasAmbientalController;
use App\Http\Controllers\CulturaCivicaController;
use App\Http\Controllers\EducacionAmbientalController;
use App\Http\Controllers\EquidadGeneroController;
use App\Http\Controllers\EstrategiaController;
use App\Http\Controllers\FomentoDeporteController;
use App\Http\Controllers\FomentoSFamiliarController;
use App\Http\Controllers\ObjetivosController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\RecoleccionRSolidosController;
use App\Http\Controllers\ResiduosSolidosController;
use App\Http\Controllers\WelcomeController;
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

// WelcomeController
Route::get('/', WelcomeController::class);
// AlianzasTSocialController
Route::get('/alianzas_t_social', [AlianzasTSocialController::class, 'alianzas_t_social']);
// CalendarioController
Route::get('/calendario', [CalendarioController::class, 'calendario']);
// CampañasAmbientalController
Route::get('/campañas_s_ambiental', [CampañasAmbientalController::class, 'campañas_s_ambiental']);
// CulturaCivicaController
Route::get('/cultura_civica', [CulturaCivicaController::class, 'cultura_civica']);
// EducacionAmbientalController
Route::get('/educacion_ambiental', [EducacionAmbientalController::class, 'educacion_ambiental']);
// EquidadGeneroController
Route::get('/equidad_genero', [EquidadGeneroController::class, 'equidad_genero']);
// EstrategiaController
Route::get('/estrategia', [EstrategiaController::class, 'estrategia']);
// FomentoDeporteController
Route::get('/fomento_deporte', [FomentoDeporteController::class, 'fomento_deporte']);
// FomentoSFamiliarController
Route::get('/fomento_s_familiar', [FomentoSFamiliarController::class, 'fomento_s_familiar']);
// ObjetivosController
Route::get('/objetivos', [ObjetivosController::class, 'objetivos']);
// QuienesSomosController
Route::get('/quienes_somos', [QuienesSomosController::class, 'quienes_somos']);
// RecoleccionRSolidosController
Route::get('/recoleccion_r_solidos', [RecoleccionRSolidosController::class, 'recoleccion_r_solidos']);
// ResiduosSolidosController
Route::get('/residuos_solidos', [ResiduosSolidosController::class, 'residuos_solidos']);