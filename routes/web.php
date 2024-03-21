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
    return redirect()->route('welcome.index');
});

Route::resource('welcome', App\Http\Controllers\welcomeController::class);
Route::get('/detail/{id}', [App\Http\Controllers\welcomeController::class, 'detail'])->name('detail.page');
Route::get('/create/{id}', [App\Http\Controllers\welcomeController::class, 'create'])->name('create.page');
Route::get('/create2/{id}', [App\Http\Controllers\welcomeController::class, 'create2'])->name('create2.page');
Route::post('/store2', [App\Http\Controllers\welcomeController::class, 'store2']);

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/admin', function () {
    return view('admin.welcome');
});

Route::get('/data_produk2', function () {
    return view('admin.data_produk2');
});

Route::resource('data_produk', App\Http\Controllers\data_produkController::class);
Route::resource('satuan', App\Http\Controllers\satuanController::class);
Route::resource('paketan', App\Http\Controllers\paketanController::class);

Route::get('/data_paket', function () {
    return view('admin.data_paket');
});

Route::get('/form', function () {
    return view('admin.form');
});

Route::get('/form-produk', function () {
    return view('form-produk');
});

Route::get('/rollmangga', function () {
    return view('produk.rollmangga');
});

Route::get('/login', [App\Http\Controllers\userController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\userController::class, 'authenticate']);
Route::get('/home', function () {
    return redirect()->to('/admin');
});
Route::get('/logout', [App\Http\Controllers\userController::class, 'logout']);
