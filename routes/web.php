<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TeacherScheduleController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/inicio', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');

//rutas para deportes
Route::resource('sports', SportController::class)->except([
    'show'
])->middleware('auth');
//Route::get('/sports', [SportController::class, 'index'])->name('sports.index');
//ruta para crear un nuevo deporte
//Route::get('/sports/create', [SportController::class, 'create'])->name('sports.create');
//ruta para guardar un nuevo deporte en la base de datos
//Route::post('/sports', [SportController::class, 'store'])->name('sports.store');
//ruta para editar un deporte
//Route::get('/sports/{sport}/edit', [SportController::class, 'edit'])->name('sports.edit');
//ruta para actualizar un deporte
//Route::put('/sports/{sport}', [SportController::class, 'update'])->name('sports.update');
//ruta para eliminar un deporte
//Route::delete('/sports/{sport}', [SportController::class, 'destroy'])->name('sports.destroy');

//rutas para profesores
Route::resource('teachers', TeacherController::class)->middleware('auth');
//Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
//ruta para nuevo maestro
//Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
//ruta para guardar un nuevo maestro
//Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
//ruta para mostrar datos del maesto
//Route::get('/teachers/{teacher}', [TeacherController::class, 'show'])->name('teachers.show');
//ruta para editar un maestro
//Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
//ruta para actualizar un maestro
//Route::put('/teachers/{teacher}', [TeacherController::class, 'update'])->name('teachers.update');
//ruta para eliminar un maestro
//Route::delete('/teachers/{teacher}', [TeacherController::class, 'destroy'])->name('teachers.destroy');

//rutas para estudiantes
Route::resource('students', StudentController::class)->middleware('auth');

Route::resource('teacherSchedules', TeacherScheduleController::class)->middleware('auth');
Route::resource('bookings', BookingController::class)->middleware('auth');


require __DIR__.'/auth.php';
