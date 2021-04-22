<?php

use App\Http\Controllers\CompagnyController;
use App\Models\Compagny;
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
    $compagnies=Compagny::all();
    return view('welcome',compact('compagnies'));
});
Route::post('/compagny-store', [CompagnyController::class, 'store']);
Route::get('/compagny-show/{id}',[CompagnyController::class,'show']);
Route::post('/compagny-delete/{id}',[CompagnyController::class,'destroy']);
Route::get('/compagny-edit/{id}',[CompagnyController::class,'edit']);
Route::post('/compagny-update/{id}',[CompagnyController::class,'update']);
