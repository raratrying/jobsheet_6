<?php

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
use App\Http\Controllers\StudentController;

// Route untuk menampilkan daftar mahasiswa
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Route untuk menampilkan form tambah mahasiswa
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Route untuk menyimpan data mahasiswa yang baru ditambahkan
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Route untuk menampilkan detail mahasiswa
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

// Route untuk menampilkan form edit mahasiswa
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

// Route untuk menyimpan perubahan pada data mahasiswa yang diedit
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

// Route untuk menghapus data mahasiswa
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
