<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});


Route::get('apprentices', [ApprenticeController::class, 'index'])->name('api.v1.apprentices.index');
Route::post('apprentices', [ApprenticeController::class, 'store'])->name('api.v1.apprentices.store');
Route::put('apprentices/{id}', [ApprenticeController::class, 'update'])->name('api.v1.apprentices.update');
Route::delete('apprentices/{id}', [ApprenticeController::class, 'destroy'])->name('api.v1.apprentices.destroy');

Route::get('areas', [AreaController::class, 'index'])->name('api.v1.areas.index');
Route::post('areas', [AreaController::class, 'store'])->name('api.v1.areas.store');
Route::put('areas/{id}', [AreaController::class, 'update'])->name('api.v1.areas.update');
Route::delete('areas/{id}', [AreaController::class, 'destroy'])->name('api.v1.areas.destroy');

Route::get('computers', [ComputerController::class, 'index'])->name('api.v1.computers.index');
Route::post('computers', [ComputerController::class, 'store'])->name('api.v1.computers.store');
Route::put('computers/{id}', [ComputerController::class, 'update'])->name('api.v1.computers.update');
Route::delete('computers/{id}', [ComputerController::class, 'destroy'])->name('api.v1.computers.destroy');

Route::get('courses', [CourseController::class, 'index'])->name('api.v1.courses.index');
Route::post('courses', [CourseController::class, 'store'])->name('api.v1.courses.store');
Route::put('courses/{id}', [CourseController::class, 'update'])->name('api.v1.courses.update');
Route::delete('courses/{id}', [CourseController::class, 'destroy'])->name('api.v1.courses.destroy');

Route::get('teachers', [TeacherController::class, 'index'])->name('api.v1.teachers.index');
Route::post('teachers', [TeacherController::class, 'store'])->name('api.v1.teachers.store');
Route::put('teachers/{id}', [TeacherController::class, 'update'])->name('api.v1.teachers.update');
Route::delete('teachers/{id}', [TeacherController::class, 'destroy'])->name('api.v1.teachers.destroy');

Route::get('training-centers', [TrainingCenterController::class, 'index'])->name('api.v1.training-centers.index');
Route::post('training-centers', [TrainingCenterController::class, 'store'])->name('api.v1.training-centers.store');
Route::put('training-centers/{id}', [TrainingCenterController::class, 'update'])->name('api.v1.training-centers.update');
Route::delete('training-centers/{id}', [TrainingCenterController::class, 'destroy'])->name('api.v1.training-centers.destroy');
