<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('student', [StudentController::class, 'index']);
Route::post('student', [StudentController::class, 'store']);
Route::put('student', [StudentController::class, 'update']);
Route::delete('student/{id}', [StudentController::class, 'destroy']);

Route::get('computer', [ComputerController::class, 'index']);
Route::get('computer/{id}', [ComputerController::class, 'show']);
Route::post('computer', [ComputerController::class, 'store']);
Route::put('computer/{id}', [ComputerController::class, 'update']);
Route::delete('computer/{id}', [ComputerController::class, 'destroy']);
Route::post('computer/search', [ComputerController::class, 'search']);

// Route::group(['prefix' => 'computer'], function () {
//     Route::get('/', [ComputerController::class, 'index']);
// });