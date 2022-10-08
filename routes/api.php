<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

$routeAuth = function () {
    Route::get('/user', [UserController::class, 'show']);
};

//$routePublic = function () {
//    Route::get('/user', [UserController::class, 'show']);
//};

//Route::namespace('Admins')->group(function () {
//
//});
//
//Route::get('/user', [UserController::class, 'show']);

Route::middleware(['web'])->prefix('auth-web')->group($routeAuth);

Route::middleware(['api', "auth:api"])->prefix('auth')->group($routeAuth);

//Route::group([
//    'middleware' => 'api',
//], $routePublic);

Route::group([
    'middleware' => 'api',
    'prefix' => '/auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post("login-google", [AuthController::class, 'login_google_api']);
    Route::post("login-apple", [AuthController::class, 'login_apple_api']);
    Route::get('me', [AuthController::class, 'me']);
});
