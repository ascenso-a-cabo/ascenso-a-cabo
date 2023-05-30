<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::get('/examenes', function () {
    return view('examenes');
})->middleware(['auth', 'verified'])->name('examenes');*/

Route::resource('examenes', ExamenController::class)
    ->only('index')
    ->middleware(['auth', 'verified']);

//RUTAS PARA LOS EXAMENES

Route::get('/examenes/{tema}', [TestController::class, 'realizarTest'])->name('test.realizar')
    ->middleware(['auth', 'verified']);
Route::post('/test/submit', [TestController::class, 'submitTest'])->name('test.submit')
    ->middleware(['auth', 'verified']);
Route::get('/simulacroexamen', [TestController::class, 'simulacroExamen'])->name('test.simulacro')
    ->middleware(['auth', 'verified']);
Route::get('/simulacro-negro', [TestController::class, 'simulacroNegro'])->name('simulacro.negro')
    ->middleware(['auth', 'verified']);


/*Route::get('/comunidad', function () {
    return view('comunidad');
})->middleware(['auth', 'verified'])->name('comunidad');*/

Route::resource('user', UserController::class)
    ->only(['index', 'show'])
    ->middleware(['auth', 'verified']);

/*Route::get('/comments', function () {
    return view('comments');
})->middleware(['auth', 'verified'])->name('comments');*/

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
