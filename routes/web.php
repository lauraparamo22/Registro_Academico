<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('Sectores', App\Http\Controllers\SectorController::class);
Route::resource('Carreras', App\Http\Controllers\CareerController::class);
Route::resource('AsistenciaCarrera', App\Http\Controllers\AttendanceCareerController::class);
Route::resource('AsistenciaCurso', App\Http\Controllers\AttendanceCourseController::class);
Route::resource('NotasCarreras', App\Http\Controllers\CareergradeController::class);
Route::resource('NotasCursos', App\Http\Controllers\CoursegradeController::class);
Route::resource('Cursos', App\Http\Controllers\CourseController::class);
Route::resource('MatriculaCarreras', App\Http\Controllers\EnrollmentcareerController::class);
Route::resource('MatriculaCursos', App\Http\Controllers\Enrollmentcoursecontroller::class);
Route::resource('Alimentacion', App\Http\Controllers\FeedingController::class);
Route::resource('Alojamientos', App\Http\Controllers\HostingController::class);
Route::resource('Modulos', App\Http\Controllers\ModuleController::class);
Route::resource('Estudiantes', App\Http\Controllers\StudentController::class);
Route::resource('Administrador', App\Http\Controllers\AdministratorController::class);