<?php

use Illuminate\Support\Facades\Route;

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
    return redirect(route('threads.index'));
})->name('home');

Route::get('threads', [\App\Http\Controllers\ThreadController::class, 'index'])->name('threads.index');
Route::get('threads/{thread}', [\App\Http\Controllers\ThreadController::class, 'show'])->name('threads.show');
