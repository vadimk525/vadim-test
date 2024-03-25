<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;

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
Route::get('/dashboard', [ProfileController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

/* Старая рабочая команда без группового машрута, ниже групповой маршрут
Route::get('/dashboardadm', [DashboardController::class, 'dashboardadm'])->middleware(['auth', 'verified'])->name('dashboardadm');
 */

Route::group(['prefix'=>'dashboardadm', 'namespase'=>'Admin', 'middleware'=>['auth', 'verified']], function() {
    Route::get('/', [DashboardController::class, 'dashboardadm'])->name('dashboardadm');
    Route::resource('category', CategoryController::class, ['as'=>'admin']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
