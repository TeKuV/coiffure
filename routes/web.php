<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CoiffureController;

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
})->middleware(['auth'])->name('dashboard');

Route::resource('users', UserController::class);

Route::resource('roles', RoleController::class);

Route::resource('permissions', PermissionController::class);

// ------------------

Route::middleware(['auth'])->group(function () {
    Route::resource('coiffures', CoiffureController::class);

    Route::get('hairstyles/all', [AppController::class, 'catalog'])->name('catalog');
});

// App

Route::get('/', [AppController::class, 'welcome'])->name('welcome');

Route::get('/about', [AppController::class, 'aboutUs'])->name('about');

Route::get('/contact-us', [AppController::class, 'contactUs'])->name('contacts.index');

Route::post('/contact-us', [AppController::class, 'sendMail'])->name('contact.send');

require __DIR__.'/auth.php';
