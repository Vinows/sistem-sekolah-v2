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
        return "Menampilkan detail siswa dengan ID: {$id}";
    })->name('show');

    Route::get('/create', function(){
        return "Halaman ini menampilkan halaman tambah siswa";
    })->name('create');

    Route::get('/{id}/edit', function(string $id){
        return "Halaman ini menampilkan halaman edit siswa dengan ID: {$id}";
    })->name('edit');

    Route::post('/', function(){
        return "Menambah data siswa baru";
    })->name('store');

    Route::put('/{id}', function(string $id){
        return "Mengubah data siswa dengan ID: {$id}";
    })->name('edit');

    Route::delete('/{id}', function(string $id){
        return "Menghapus data siswa dengan ID: {$id}";
    })->name('destroy');
});
