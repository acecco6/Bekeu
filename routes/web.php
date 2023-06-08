<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Views\SuscripcionController;


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

Route::prefix('suscripcion')->group(function() {
    Route::GET("", [SuscripcionController::class,"index"])->name("suscripcion.index");
    Route::GET("show/{id}", [SuscripcionController::class,"show"])->name("suscripcion.show");
    Route::GET("create", [SuscripcionController::class,"create"])->name("suscripcion.create");
    Route::POST("post", [SuscripcionController::class,"post"])->name("suscripcion.post");
    Route::PUT("update", [SuscripcionController::class,"update"])->name("suscripcion.update");
    Route::delete("delete/{id}", [SuscripcionController::class,"delete"])->name("suscripcion.delete");
});
