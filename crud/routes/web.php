<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Database\Eloquent\Model;

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
    return view('home');
});

Route::get('/create', function () {
    return view('contact.create');
});

Route::get('/list', [ContactController::class, 'list']);

Route::get('/{id}', [ContactController::class, 'find']);

Route::post('/create', [ContactController::class, 'create']);

Route::delete('/{id}', [ContactController::class, 'delete']);