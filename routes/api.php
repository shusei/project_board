<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use BoardController.php
use App\Http\Controllers\BoardController;

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

// 網址設為board, 可用指令 php artisan route:list 查看路由表
// Facades Route的 apiResource()會自動對應到 BoardController內相對應的function()
Route::apiResource('board', BoardController::class);
