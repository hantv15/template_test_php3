<?php

use App\Http\Controllers\HostpitalController;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;

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
Route::get('/', [HostpitalController::class, 'view'])->name('view.hospital');
Route::get('/hostpital/add', function(){
    return view('admin.hostpital.add');
})->name('add.hostpital');
Route::post('/hostpital/add', [HostpitalController::class, 'saveAdd']);
// Route::get('/hostpital/edit/{id}', [HostpitalController::class, 'formEdit'])->name('edit.hostpital');
// Route::post('/hostpital/edit/{id}', [HostpitalController::class, 'saveEdit']);
// Route::post('/hostpital/remove', [HostpitalController::class, 'remove']);