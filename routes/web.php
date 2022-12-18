<?php
use App\Http\Controllers\PenilaianMahasiswaController;
use App\Http\Controllers\controllerMhs;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('PenilaianMahasiswa', [PenilaianMahasiswaController::class, 'PenilaianMahasiswa'])->name('PenilaianMahasiswa')->middleware('auth');
Route::post('PenilaianMahasiswa/simpan', [controllerMhs::class, 'simpannilai'])->name('simpannilai');

Route::get('NilaiMahasiswa', [PenilaianMahasiswaController::class, 'index'])->name('NilaiMahasiswa')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
