<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('students')->name('students.')->group(function () {
    Route::get('/', function () {
        return "Ini adalah halaman daftar siswa";
    })->name('index');

    Route::get('/{id}', function($id){
        return "Menampilkan siswa dengan ID: {$id}";
    })->name('show');

    Route::get('/create', function(){
        return "Menampilkan halaman tambah siswa";
    })->name('create');

    Route::get('/{id}/edit', function(string $id){
        return "Menampilkan halaman edit siswa dengan ID: {$id}";
    })->name('edit');

    Route::post('/', function(){
        return "Melakukan penambahan data siswa";
    })->name('store');

    Route::put('/{id}', function(string $id){
        return "Melakukan perubahan data siswa dengan ID: {$id}";
    })->name('edit');

    Route::delete('/{id}', function(string $id){
        return "Menghapus data siswa dengan ID: {$id}";
    })->name('destroy');
});

Route::prefix('teachers')->name('teachers.')->group(function () {
    Route::get('/', function () {
        return "Ini adalah halaman daftar guru";
    })->name('index');

    Route::get('/{id}', function($id){
        return "Menampilkan guru dengan ID: {$id}";
    })->name('show');

    Route::get('/create', function(){
        return "Menampilkan halaman tambah guru";
    })->name('create');

    Route::get('/{id}/edit', function(string $id){
        return "Menampilkan halaman edit guru dengan ID: {$id}";
    })->name('edit');

    Route::post('/', function(){
        return "Melakukan penambahan data guru";
    })->name('store');

    Route::put('/{id}', function(string $id){
        return "Melakukan perubahan data guru dengan ID: {$id}";
    })->name('edit');

    Route::delete('/{id}', function(string $id){
        return "Menghapus data guru dengan ID: {$id}";
    })->name('destroy');
});

