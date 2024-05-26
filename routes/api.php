<?php

use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\subjectcontroller;
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

Route::get('/students', [studentcontroller::class, 'index']);
Route::get('/students/{id}', [studentcontroller::class, 'select']);
Route::post('/students', [studentcontroller::class, 'create']);
Route::patch('/students/{id}', [studentcontroller::class, 'update']);
Route::delete('/students/{id}', [studentcontroller::class, 'delete']);

Route::get('/students/{id}/subjects', [studentcontroller::class, 'subjects']);

Route::get('/subject', [subjectcontroller::class, 'index']);
Route::get('/subject/{id}', [subjectcontroller::class, 'select']);
Route::post('/subject', [subjectcontroller::class, 'create']);
Route::patch('/subject/{id}', [subjectcontroller::class, 'update']);
Route::delete('/subject/{id}', [subjectcontroller::class, 'delete']);

Route::get('/subject/{id}', [subjectcontroller::class, 'calcAve']);