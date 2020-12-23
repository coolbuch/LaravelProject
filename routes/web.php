<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentSubjectController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

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

Route::get('/student', [StudentController::class, 'render']) -> name("students");
Route::get('/subject', [SubjectController::class, 'render']) -> name("subjects");
Route::get('/studentSubject', [StudentSubjectController::class, 'render']) -> name("studentSubjects");

Route::get('/student/create', function () {
    return view('studentForm');
});
Route::get('/subject/create', function () {
    return view('subjectForm');
});
Route::get('/studentSubject/create', function () {
    return view('studentSubjectForm');
});

Route::post('/student/create', [StudentController::class, 'create']);
Route::post('/subject/create', [SubjectController::class, 'create']);
Route::post('/studentSubject/create', [StudentSubjectController::class, 'create']);





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
