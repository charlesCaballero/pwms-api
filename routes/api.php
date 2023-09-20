<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\StorageRequestController;
use App\Http\Controllers\WithdrawalRequestController;
use App\Http\Controllers\ReturnRequestController;
use App\Http\Controllers\DisposalRequestController;
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

Route::post('/auth/register', [AuthController::class, 'register'])->middleware(['auth:sanctum']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::group(['prefix' => 'app'], function () {
        Route::post('user/photo', [UserController::class, 'changePhoto']);
        Route::apiResource('user', UserController::class);
        Route::apiResource('office', OfficeController::class);
        Route::apiResource('role', RoleController::class);
        Route::apiResource('module', ModuleController::class);
        // Route::apiResource('inventory', InventoryController::class);
        Route::get('inventory/{type}', [InventoryController::class,'index']);
        Route::post('inventory', [InventoryController::class,'store']);
        // Route::get('inventory/show', [InventoryController::class,'show']);
        Route::put('inventory/{type}/{id}', [InventoryController::class,'update']);
        Route::group(['prefix' => 'request'], function () {
            Route::apiResource('storage', StorageRequestController::class);
            Route::apiResource('withdrawal', WithdrawalRequestController::class);
            Route::get('return/retrieved', [ReturnRequestController::class, 'pending']);
            Route::apiResource('return', ReturnRequestController::class);
            Route::get('disposal/pending', [DisposalRequestController::class, 'pending']);
            Route::apiResource('disposal', DisposalRequestController::class);
        });
    });

    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::post('/get/auth', [UserController::class, 'details']);
});

Route::group(['prefix' => 'get'], function () {
    Route::get('offices', [GetController::class, 'getOffices']);
    Route::get('roles', [GetController::class, 'getRoles']);
    Route::get('retentions', [GetController::class, 'getRetentions']);
    Route::get('inventory/boxcode/{officeID}', [GetController::class, 'getNewBoxCode']);
});

Route::group(['prefix' => 'search'], function () {
    Route::get('inventory/{officeID}/{keyword}', [InventoryController::class, 'search']);
});
