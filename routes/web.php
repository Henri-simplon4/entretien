<?php

use App\Http\Controllers\EntretienController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\ListeController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\AnneeController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controller\ConnexionController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('accueil');
})->middleware(['auth', 'verified'])->name('accueil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('vehicules', 'VehiculeController');
// Route::resource('entretiens', 'EntretienController');

Route::get('/espaceclient', function () {
    return view('espaceclient');
})->name('espaceclient');

Route::get('/piece', function () {
    return view('piece');
})->name('piece');

Route::get('/niveau', function () {
    return view('niveau');
})->name('niveau');

Route::get('/pneu', function () {
    return view('pneu');
})->name('pneu');

Route::get('/eclairage', function () {
    return view('eclairage');
})->name('eclairage');

Route::get('/profilevehicule', function () {
    return view('profilevehicule');
})->name('profil.store');

Route::get('/entretien', function () {
    return view('entretien');
})->name('entretien');

Route::get('/frein', function () {
    return view('frein');
})->name('frein');

Route::get('/protection', function () {
    return view('protection');
})->name('protection');

Route::get('/parametre', function () {
    return view('parametre');
})->name('parametre');

Route::get('/client', function () {
    return view('client');
})->name('client');



Route::middleware(['auth'])->group(function () {
    // Your other protected routes here
Route::post('/entretien', [EntretienController::class, 'store'])->name('entretien.store');
Route::get('/historique', 'EntretienController@index')->name('historique.index');
});

Route::group(['middleware' => 'guest'], function () {
// Route::get('/entretien', [EntretienController::class, 'store'])->name('entretien.store');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

Route::post('/annee', [AnneeController::class, 'store'])->name('annee.store');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


// Route::post('/entretien', [EntretienController::class, 'store'])->name('entretien.store');
// Route::post('/profil', [ProfileController::class, 'store'])->name('profil.store');
Route::post('/profilevehicule', [ProfileController::class, 'store'])->name('profil.store');

Route::get('/liste', [ListeController::class, 'getList'])->name('liste');
Route::delete('/entretiens/{entretien}', [ListeController::class, 'destroy'])->name('supprimer');

// Route::post('/parametre', [MarqueController::class, 'store'])->name('marque.store');
Route::post('/parametre', [ModelController::class, 'store'])->name('model.store');
Route::match(['get', 'post'], '/marque', [MarqueController::class,'store'])->name('marque');
Route::match(['get', 'post'], '/model', [ModelController::class,'store'])->name('model');
Route::match(['get', 'post'], '/mannee', [AnneeController::class,'store'])->name('annee');


Route::get('/historique', [HistoriqueController::class, 'getList'])->name('historique');

Route::get('/connexion', [ConnexionController::class, 'create'])->name('connexion.store');
Route::post('/connexion', [ConnexionController::class, 'store'])->name('connexion.store');
