<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\PaimentController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\SalaireController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\HistoriqueController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nn', function () {
    return view('niveau');
});
Route::get('/lesdates', function () {
    return view('dates');
});

Route::get('/cc', function () {
    return view('cc');
});

Route::get('/tt', [NiveauController::class,'voir'] );
Route::get('/vv', [EtudiantController::class,'voir'] );
Route::resource('niveaux', NiveauController::class);
Route::resource('users', UserController::class);
Route::resource('periodes', PeriodeController::class);
Route::resource('etudiants', EtudiantController::class);
Route::resource('groupes', GroupeController::class);
Route::resource('paiments', PaimentController::class);
Route::resource('historiques', HistoriqueController::class);
Route::resource('formateurs', FormateurController::class);
Route::resource('salaires', SalaireController::class);

Route::controller(HistoriqueController::class)->group(function () {
    Route::resource('historiques', HistoriqueController::class);
    Route::get('etudiant/{id}/historiques', 'index')->name('historiques.etudiant');
});

Route::controller(GroupeController::class)->group(function () {
    Route::resource('groupes', GroupeController::class);
    Route::get('matiere/{id}/groupes', 'index')->name('groupes.matiere');
});

Route::controller(PaimentController::class)->group(function () {
    Route::resource('paiments', PaimentController::class);
    Route::get('etudiant/{id}/paiments', 'index')->name('paiments.etudiant');
});
Route::controller(PaimentController::class)->group(function () {
    Route::resource('groupes', GroupeController::class);
    Route::get('groupe/{id}/groupes', 'index')->name('paiments.groupe');
});

Route::controller(SalaireController::class)->group(function () {
    Route::resource('salaires', SalaireController::class);
    Route::get('formateur/{id}/salaires', 'index')->name('salaires.formateur');
});

Route::controller(EtudiantController::class)->group(function () {
    Route::resource('etudiants', EtudiantController::class);
    Route::get('groupe/{id}/etudiants', 'index')->name('etudiants.groupe');
});

Route::controller(MatiereController::class)->group(function () {
    Route::resource('matieres', MatiereController::class);
    Route::get('niveau/{id}/matieres', 'index')->name('matieres.niveau');
});

Route::controller(FormateurController::class)->group(function () {
    Route::resource('formateurs', FormateurController::class);
    Route::get('groupe/{id}/formateurs', 'index')->name('formateurs.groupe');
});

Route::resource('matieres', MatiereController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('generate-pdf1', [PDFController::class, 'generatePDF1']);