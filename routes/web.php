<?php

use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('students')->name('students.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');

    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    Route::get('/create', [StudentController::class, 'create'])->name('create');

    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    Route::post('/', [StudentController::class, 'store'])->name('store');

    Route::put('/{id}', [StudentController::class, 'edit'])->name('edit');

    Route::delete('/{id}',[StudentController::class, 'destroy'])->name('destroy');
});

Route::prefix('teachers')->name('teachers.')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('index');

    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

    Route::get('/create', [TeacherController::class, 'create'])->name('create');

    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

    Route::post('/', [TeacherController::class, 'store'])->name('store');

    Route::put('/{id}', [TeacherController::class, 'edit'])->name('edit');

    Route::delete('/{id}',[TeacherController::class, 'destroy'])->name('destroy');
});

Route::prefix('classes')->name('classes.')->group(function () {
    Route::get('/', IndexController::class )->name('index');

    Route::get('/{id}', ShowController::class )->name('show');

    Route::get('/create', CreateController::class )->name('create');

    Route::get('/{id}/edit', EditController::class )->name('edit');

    Route::post('/', StoreController::class )->name('store');

    Route::put('/{id}', EditController::class )->name('edit');

    Route::delete('/{id}', DestroyController::class )->name('destroy');
});

Route::resource('Major', MajorController::class);