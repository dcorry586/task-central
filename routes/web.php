<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TodoController;

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

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('todo', TodoController::class);

/*
Route::get('/dashboard', function () {
    return view('dashboard');
 })->middleware(['auth'])->name('dashboard'); // checks if user is logged in to access this view // !loggedin: route(login)
*/

require __DIR__.'/auth.php';

