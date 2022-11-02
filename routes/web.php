<?php

use App\Controller\IndexController;
use App\Controller\QuoteeController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [IndexController::class, 'indexAction'])->name('index');
Route::post('/', [IndexController::class, 'saveQuote'])->name('saveQuote');

Route::get('/quotee/{id}', [QuoteeController::class, 'getQuotee'])->name('getQuotee');

require __DIR__.'/auth.php';
