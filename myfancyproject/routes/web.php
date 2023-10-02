<?php

use App\Http\Controllers\bookController;
use App\Models\book;
use Illuminate\Support\Facades\Route;

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
//alap útvonalak
Route::get('/api/books', [bookController::class, 'index']);
Route::get('/api/books/{id}', [bookController::class, 'show']);

Route::delete('/api/books/{id}', [bookController::class, 'delete']);
Route::post('/api/books', [bookController::class, 'store']);
Route::put('/api/books/{id}', [bookController::class, 'update']);

Route::get('/book/list', [bookController::class, 'listView']);
