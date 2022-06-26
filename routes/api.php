<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;
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

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::group(['prefix' => 'app'], function () {
        Route::post('user/photo', [UserController::class, 'changePhoto']);
        Route::apiResource('user', UserController::class);
        Route::apiResource('office', OfficeController::class);
        Route::apiResource('role', RoleController::class);
        Route::apiResource('module', ModuleController::class);
    });

    Route::post('/auth/logout', [AuthController::class, 'logout']);
});

Route::group(['prefix' => 'get'], function () {
    Route::get('offices', [GetController::class, 'getOffices']);
});
