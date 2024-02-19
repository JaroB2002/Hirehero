<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stageController;
use App\Http\Controllers\BedrijfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\SelectieController;
use App\Http\Controllers\VacatureController;
use App\Http\Controllers\SollicitatieController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\BedrijfRegisterController;
use App\Http\Controllers\BedrijfsProfielController;
use App\Http\Controllers\StudentRegisterController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

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

Route::get('/student', [RegisteredUserController::class,'createStudent'])->name('student.create');
Route::post('/student', [RegisteredUserController::class, 'storeStudent']);
Route::get('/student/update', [RegisteredUserController::class, 'editStudent'])->name('student.update');
Route::post('/student/update', [RegisteredUserController::class, 'updateStudent']);
Route::get('/student/persoonlijk', [RegisteredUserController::class, 'persoonlijkStudent'])->name('student.persoonlijk');
Route::post('/student/persoonlijk', [RegisteredUserController::class, 'storePersoonlijkStudent']);

//Hier komen de routes van de studenten wanneer ze ingelogd zijn
Route::middleware('auth', 'verified')->group(function() {


Route::get('/student/stage', [stageController::class, 'index'])->name('stage.index');
Route::post('/student/stage/results', [stageController::class, 'search'])->name('stage.search');
Route::get('/student/stage/results', [stageController::class, 'search'])->name('stage.results');
Route::get('/student/stage/{vacature:id}', [stageController::class, 'show'])->name('stage.show');
Route::get('/student/stage/{vacature:id}/solliciteren', [stageController::class, 'solliciteren'])->name('stage.solliciteren');
Route::post('/student/stage/{vacature:id}/solliciteren', [stageController::class, 'storeSollicitatie'])->name('stage.storeSollicitatie');
Route::get('/student/stages', [stageController::class, 'showSollicitaties'])->name('studentSollicitatie.index');






});



//Routes voor bedrijven

Route::get('/bedrijf', [RegisteredUserController::class, 'create'])->name('bedrijf.create');
Route::post('/bedrijf', [RegisteredUserController::class, 'store']);

Route::middleware('auth', 'verified')->group(function () {
    //De route index is voor het weergeven van het dashboard van het bedrijf
 Route::get('bedrijf/index', [VacatureController::class, 'index'])->name('vacature.index');
    //De route create is voor het weergeven van het formulier om een nieuwe medewerker toe te voegen
    Route::get('bedrijf/team', [BedrijfController::class, 'create'])->name('bedrijf.team');
    //De route store is voor het verwerken van het formulier om een nieuwe medewerker toe te voegen
    Route::post('bedrijf/team', [BedrijfController::class, 'storeEmployee'])->name('bedrijf.store');
    //De route show is voor het weergeven van het team van het bedrijf
    Route::get('bedrijf/show', [BedrijfController::class, 'show'])->name('bedrijf.show');
    //Route::get('employee/', [EmployeeController::class, 'index'])->name('employee.index');
    //Routes voor vacatures
    Route::get('bedrijf/vacature', [VacatureController::class, 'index'])->name('vacature.index');
    Route::post('bedrijf/vacature', [VacatureController::class, 'store'])->name('vacature.store');
    Route::get('bedrijf/vacature/create', [VacatureController::class, 'create'])->name('vacature.create');
    //Pas de vacature status aan
    Route::patch('bedrijf/vacature', [VacatureController::class, 'updateStatus'])->name('vacature.status');
    //Bekijk de vollledige vacature
    Route::get('bedrijf/vacature/{vacature:id}', [VacatureController::class, 'show']);
    Route::get('bedrijf/vacature/{vacature:id}/edit', [VacatureController::class, 'edit']);
    Route::put('bedrijf/vacature/{vacature:id}/edit', [VacatureController::class, 'update']);
    Route::delete('bedrijf/vacature/{vacature:id}/destroy', [VacatureController::class, 'destroyVacature']);
    Route::get('bedrijf/vacature/{vacature:id}/destroy', [VacatureController::class, 'destroy']);

    //Bedrijfsprofiel
    Route::get('bedrijf/profiel', [BedrijfsProfielController::class, 'index'])->name('bedrijf.profiel');
    Route::get('bedrijf/profiel/edit', [BedrijfsProfielController::class, 'edit'])->name('bedrijf.profielEdit');
    Route::patch('bedrijf/profiel/edit', [BedrijfsProfielController::class, 'update'])->name('bedrijf.profielUpdate');

    //Route voor projecten van het bedrijf
    Route::get('bedrijf/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('bedrijf/project/create', [ProjectController::class, 'create'])->name('project.create'); 
    Route::post('bedrijf/project', [ProjectController::class, 'store'])->name('project.store');
    Route::get('bedrijf/project/{projectName}', [ProjectController::class, 'show']);

    //edit de gehele vacature
    Route::get('bedrijf/vacature/{vacature:id}/edit', [VacatureController::class, 'edit']);
    Route::put('bedrijf/vacature/{vacature:id}/edit', [VacatureController::class, 'update']);
    Route::delete('bedrijf/vacature/{vacature:id}/destroy', [VacatureController::class, 'destroyVacature']);

    //Routes voor sollicitaties
    Route::get('bedrijf/vacature/{vacature_id}/sollicitaties', [SollicitatieController::class, 'index'])->name('sollicitatie.index');
    Route::patch('bedrijf/vacature/{vacature_id}/sollicitaties', [SollicitatieController::class, 'updateStatus']);
    //Route::get('bedrijf/vacature/', [VacatureController::class, 'create2'])->name('vacature.create2');
    //Route::post('bedrijf/vacature/', [VacatureController::class, 'store2'])->name('vacature.store2');




    //welke soorten routes zijn er allemaal?
    //get, post, put, patch, delete
    //get is voor het weergeven van een pagina
    //post is voor het verwerken van een formulier
    //put is voor het updaten van een resource
    //patch is voor het updaten van een resource
    //Het verschil tussen put en patch is dat put alle velden van een resource update en patch alleen de velden die je wilt updaten
    //delete is voor het verwijderen van een resource
});

Route::get('/not-found', [NotFoundController::class, 'index']);


Route::middleware('auth', 'verified')->group(function(){
    Route::get('student/index',[StudentController::class,'index'])->name('student.index');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
