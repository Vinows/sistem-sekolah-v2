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
        return
    })
});