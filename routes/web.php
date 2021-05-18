<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PageController;
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

/* Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard'); */

Route::get('/', [PageController::class,'index']);

Route::get('dashboard',[PageController::class,'dashboard'])
->middleware('auth:sanctum')
->name('dashboard');
//aqui no le damos nombres porque resource ya le da por defecto, ojo el controller sin corchetes!
Route::resource('notes', NoteController::class)
->middleware('auth:sanctum');

