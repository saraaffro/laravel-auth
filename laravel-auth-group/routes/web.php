<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [ProjectController :: class, 'index'])
    -> name('project.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ROUTE PROJECT
    
    // EDIT
    Route::get('/project/{id}/edit', [ProjectController :: class, 'edit'])
        -> name('project.edit');

    // UPDATE
    Route::put('/project/{id}', [ProjectController :: class, 'update'])
        -> name('project.update');
    
    // DELETE
    Route::delete('/project/{id}', [ProjectController :: class, 'destroy'])
        -> name('project.destroy');

    // CREATE
    Route::get('/project/create', [ProjectController :: class, 'create'])
    -> name('project.create');

    // STORE
    Route :: post('/project', [ProjectController :: class, 'store'])
        -> name('project.store');
});

Route::get('/project/{id}', [ProjectController :: class, 'show'])
    -> name('project.show');


require __DIR__.'/auth.php';
