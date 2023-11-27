<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

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

//localhost:8000にアクセスが来たらlocalhost:8000/scheduleにリダイレクトする
Route::redirect('/', '/schedule');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/schedule', [ScheduleController::class, 'index']);
Route::get('/schedule/create', [ScheduleController::class, 'create']);
Route::get('/schedule/{id}', [ScheduleController::class, 'show']);
Route::get('/schedule/{id}/edit', [ScheduleController::class, 'edit']);
Route::put('/schedule/{id}', [ScheduleController::class, 'update']);
Route::post('/schedule', [ScheduleController::class, 'store']);
Route::delete('/schedule/{id}', [ScheduleController::class, 'destroy']);
