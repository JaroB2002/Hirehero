<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BedrijfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SelectieController;
use App\Http\Controllers\VacatureController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\BedrijfRegisterController;
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
/*Route::get('verify-email', EmailVerificationPromptController::class)
->name('verification.notice');
Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
->middleware(['signed', 'throttle:6,1'])
->name('verification.verify');

Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
->middleware('throttle:6,1')
->name('verification.send');*/




//Routes voor bedrijven

Route::get('/bedrijf', [RegisteredUserController::class, 'create'])->name('bedrijf.create');
Route::post('/bedrijf', [RegisteredUserController::class, 'store']);

Route::middleware('auth', 'verified')->group(function () {
    //De route index is voor het weergeven van het dashboard van het bedrijf
 Route::get('bedrijf/index', [BedrijfController::class, 'index'])->name('bedrijf.index');
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
});

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
