<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbacksRequestController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\FeedbacksCategoriesController;
use App\Http\Controllers\PermissionController;

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


Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
});

// Diğer işlemleri yönlendirin
Route::post('users', [UserController::class, 'store']);


// web.php veya api.php (route tanımlama dosyanıza bağlı olarak)
// Route::get('requests', [FeedbacksRequestController::class, 'index']);

Route::apiResource('requests', FeedbacksRequestController::class)->middleware('auth:sanctum');

Route::apiResource('address', AddressController::class)->middleware('auth:sanctum');
Route::apiResource('messages', MessageController::class)->middleware('auth:sanctum');


Route::apiResource('categories', FeedbacksCategoriesController::class);
Route::apiResource('permissions', PermissionController::class);
