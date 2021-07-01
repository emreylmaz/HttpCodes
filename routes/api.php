<?php

use App\Http\Controllers\CodesController;
use App\Models\Code;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/emre', [CodesController::class, 'test']);

Route::get('/codes', [CodesController::class, 'index']);
Route::post('/codes', [CodesController::class, 'store']);
Route::put('/codes/{codes}', [CodesController::class, 'update']);
Route::delete('/codes/{codes}', [CodesController::class, 'destroy']);
