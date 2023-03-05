<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CursesController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\InsurersController;
use App\Http\Controllers\PDFController;
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
//experiencia d'usuari
Route::get('/', [ParticipantsController::class, 'showMain'])->name("PaginaPrincipal");
Route::get('/cursa/{id}', [ParticipantsController::class, 'create'])->name("crearParticipant");
Route::post('/participantStore/', [ParticipantsController::class, 'store'])->name("GuardarParticipant");
//marcar temps participant
Route::get('/participantTemps/{id}', [ParticipantsController::class, 'markTime'])->name("markTime")->middleware('auth');
//rutes administrador
Auth::routes();
//curses
Route::get('/curses/crear/', [CursesController::class, 'create'])->name("crearCurses")->middleware('auth');
Route::post('/cursesStore/', [CursesController::class, 'store'])->name("GuardarCurses")->middleware('auth');
Route::get('/curses/show/', [CursesController::class, 'show'])->name("llistarCurses")->middleware('auth');
Route::post('/curses/show/', [CursesController::class, 'show'])->name("llistarCursesPost")->middleware('auth');
Route::get('/curses/update/', [CursesController::class, 'update'])->name("modificarCurses")->middleware('auth');
Route::post('/cursesUpdate/', [CursesController::class, 'updated'])->name("actualitzarCurses")->middleware('auth');
Route::get('updateStateRace/{id}',[CursesController::class,'updateState'])->name('actualitzarEstatCurses')->middleware('auth');
Route::get('/curses/show/images/', [CursesController::class, 'showUploadImages'])->name("showUploadImages")->middleware('auth');
//sponsors
Route::get('/sponsors/crear/', [SponsorsController::class, 'create'])->name("crearSponsors")->middleware('auth');
Route::post('/sponsorsStore/', [SponsorsController::class, 'store'])->name("GuardarSponsors")->middleware('auth');
Route::get('/sponsors/show/', [SponsorsController::class, 'show'])->name("llistarSponsors")->middleware('auth');
Route::post('/sponsors/show/', [SponsorsController::class, 'show'])->name("llistarSponsorsPost")->middleware('auth');
Route::get('/sponsors/update/', [SponsorsController::class, 'update'])->name("modificarSponsors")->middleware('auth');
Route::post('/SponsorsUpdate/', [SponsorsController::class, 'updated'])->name("actualitzarSponsors")->middleware('auth');
Route::get('updateStateSponsor/{id}',[SponsorsController::class,'updateState'])->name('actualitzarEstatSponsor')->middleware('auth');
//insurers
Route::get('/insurers/crear/', [InsurersController::class, 'create'])->name("crearInsurers")->middleware('auth');
Route::post('/insurersStore/', [InsurersController::class, 'store'])->name("GuardarInsurers")->middleware('auth');
Route::get('/insurers/show/', [InsurersController::class, 'show'])->name("llistarInsurers")->middleware('auth');
Route::post('/insurers/show/', [InsurersController::class, 'show'])->name("llistarInsurersPost")->middleware('auth');
Route::get('/insurers/update/', [InsurersController::class, 'update'])->name("modificarInsurers")->middleware('auth');
Route::post('/insurersUpdate/', [InsurersController::class, 'updated'])->name("actualitzarInsurers")->middleware('auth');
Route::get('updateStateInsurers/{id}',[InsurersController::class,'updateState'])->name('actualitzarEstatInsurers')->middleware('auth');
//altres
Route::get('/Menu', [AdminController::class, 'index'])->name('Menu');
Route::get('generate-Pdf-Dorsal-pdf/', [PDFController::class, 'generatePdfDorsal'])->name("generateDorsal")->middleware('auth');