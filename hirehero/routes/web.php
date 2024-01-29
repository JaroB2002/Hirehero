<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BedrijfRegister;
use App\Http\Controllers\StudentRegister;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SelectieController;
use App\Http\Controllers\BedrijfRegisterController;
use App\Http\Controllers\StudentRegisterController;

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

//create methode is voor het weergeven van het formulier
//store methode is voor het verwerken van het formulier
//show methode is voor het weergeven van een specifieke resource


Route::get('/', [SelectieController::class, 'index']);
Route::post('/process', [SelectieController::class, 'process'])->name('selectie.process');
Route::get('/volgende', [SelectieController::class, 'volgende'])->name('volgende.pagina');

//Hier komen de routes van studenten
Route::get('/student', [StudentRegisterController::class, 'create'])->name('student.pagina');
Route::post('/student', [StudentRegisterController::class, 'store']);
Route::get('/student/update', [StudentRegisterController::class, 'edit'])->name('student.update');
Route::post('/student/update', [StudentRegisterController::class, 'update']);
Route::get('/student/persoonlijk', [StudentRegisterController::class, 'persoonlijk'])->name('student.persoonlijk');
Route::post('/student/persoonlijk', [StudentRegisterController::class, 'storePersoonlijk']);

//Routes voor bedrijven

Route::get('/bedrijf', [BedrijfRegisterController::class, 'create'])->name('bedrijf.pagina');
Route::post('/bedrijf', [BedrijfRegisterController::class, 'store']);







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
