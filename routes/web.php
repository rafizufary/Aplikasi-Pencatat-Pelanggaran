<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\LihatRaporController;
use App\Http\Controllers\UpdatePassController;
use Illuminate\Support\Facades\Redirect;



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
    return Redirect::to('login');
});

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::put('/login-proses', [CustomAuthController::class, 'customLogin']);
Route::get('/signout', [CustomAuthController::class, 'signOut']);


Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', [Dashboard::class, 'index'])->middleware('auth');


Route::get('/siswa', [SiswaController::class, 'index'])->middleware('auth');
Route::put('/siswa-save', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::put('/siswa-update', [SiswaController::class, 'update']);
Route::get('/siswa/delete/{id}', [SiswaController::class, 'delete']);
Route::get('/siswa/export_excel', [SiswaController::class, 'export_excel']);

Route::get('mapel', [MapelController::class, 'index'])->middleware('auth');
Route::put('mapel-save', [MapelController::class, 'store']);
Route::get('/mapel/edit/{id}', [MapelController::class, 'edit']);
Route::put('/mapel-update', [MapelController::class, 'update']);
Route::get('/mapel/delete/{id}', [MapelController::class, 'delete']);
Route::get('/mapel/export_excel', [MapelController::class, 'export_excel']);

Route::get('nilai', [NilaiController::class, 'index'])->middleware('auth');
Route::put('nilai-save', [NilaiController::class, 'store']);
Route::get('/nilai/edit/{id}', [NilaiController::class, 'edit']);
Route::put('/nilai-update', [NilaiController::class, 'update']);
Route::get('/nilai/delete/{id}', [NilaiController::class, 'delete']);
Route::get('/nilai/export_excel', [NilaiController::class, 'export_excel']);
Route::resource('admin', AdminController::class);

});

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard_user', [UserDashboardController::class, 'index'])->middleware('auth');
    Route::get('lihatrapor', [LihatRaporController::class, 'index'])->middleware('auth');
    Route::get('updatepass', [UpdatePassController::class, 'index'])->middleware('auth');
Route::resource('user', AdminController::class);
});