<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Autorisations
Route::resource('users', App\Http\Controllers\Autorisations\UserController::class);

Route::resource('roles', App\Http\Controllers\Autorisations\RoleController::class);

Route::resource('permissions', App\Http\Controllers\Autorisations\PermissionController::class);

// ------------------
Route::resource('coiffures', App\Http\Controllers\CoiffureController::class);

Route::get('catalogues', [App\Http\Controllers\CatalogueController::class, 'index'])->name('catalogues.index');

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::get('profiles', [App\Http\Controllers\ProfileController::class, 'show'])->name('profiles.show');

Route::get('profiles/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profiles.edit');

Route::put('profiles/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profiles.update');

Route::delete('profiles/{user}', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profiles.destroy');

// App 

Route::get('/', [App\Http\Controllers\AppController::class, 'home'])->name('home');

// a traiter

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/service', function () {
    return view('pages.departement');
});

Route::get('/Blog', function () {
    return view('pages.blog');
});

Route::get('/Contact', function () {
    return view('pages.contact');
});

require __DIR__.'/auth.php';
