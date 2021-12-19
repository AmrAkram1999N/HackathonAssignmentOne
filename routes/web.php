<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ViewController;
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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Clients
Route::get('/cardView',[ViewController::class,'cardView'])->name('cardView');
Route::post('/getNumber',[CardController::class,'getNumber'])->name('getNumber');
Route::post('/previousNumber/{number}', [CardController::class,'previousNumber'])->name('previousNumber');
Route::post('/nextNumber/{number}', [CardController::class,'nextNumber'])->name('nextNumber');


//User
Route::get('/userViewCard',[ViewController::class,'userViewCard'])->name('userViewCard')->middleware('auth');
Route::post('/getClient',[CardController::class,'getClient'])->name('getClient')->middleware('auth');


//Projetc System
Route::get('/databaseSystem', [ViewController::class,'databaseSystem'])->name('databaseSystem');
Route::get('/interfaceSystem', [ViewController::class,'interfaceSystem'])->name('interfaceSystem');
Route::get('/controllerModelSystem', [ViewController::class,'controllerModelSystem'])->name('controllerModelSystem');


//Localization Buttons
Route::get('/cardView/{lang}',[ViewController::class,'cardView'])->name('langChoice');
