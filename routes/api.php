<?php

use App\Http\Controllers\api\PeopleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('bielenin/305345/people', [PeopleController::class, 'index']);
Route::get('bielenin/305345/people/{people}', [PeopleController::class, 'show']);
Route::post('bielenin/305345/people', [PeopleController::class, 'store']);
Route::put('bielenin/305345/people/{people}', [PeopleController::class, 'update']);
Route::delete('bielenin/305345/people/{people}', [PeopleController::class, 'delete']);

