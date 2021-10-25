<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PollController;
use App\Http\Middleware\OnlyAdmin;
use App\Http\Middleware\OnlyAuthenticated;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    "prefix"=>"auth",
],function() {

    Route::group([
        "middleware"=>[
            OnlyAuthenticated::class
            ]
    ], function() {
        Route::post("me", [AuthController::class,"me"]);
        Route::post("logout", [AuthController::class,"logout"]);
        Route::post("reset_password", [AuthController::class,"resetPassword"]);
    });

    Route::post("login", [AuthController::class,"login"]);
});

Route::group([
    "prefix"=>"poll"
], function() {

    Route::group([
        "middleware"=>[
            OnlyAdmin::class
        ]
    ], function() {

        Route::post("", [PollController::class,"create"]);

    });

    Route::get("", [PollController::class,"get"]);
    Route::get("{poll_id}", [PollController::class,"show"]);

});