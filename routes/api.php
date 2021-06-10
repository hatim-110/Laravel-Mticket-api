<?php

use App\Http\Controllers\VilleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VoyageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Ville', [VilleController::class, 'index']);

Route::post('/Upload-agence', [AgenceController::class, 'upload']);

 Route::get('/voyage', [VoyageController::class, 'index']);

Route::get('voyage/search/{id}', [VoyageController::class, 'show']);

Route::post('Reservation', [ReservationController::class, 'save']);

Route::get('/voyage', [VoyageController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);



