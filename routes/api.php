<?php

use App\Http\Controllers\Api\V1\BlogNewController as V1BlogNewController;
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

// api/v1/
Route::prefix('v1')->namespace('App\Http\Controllers\Api\V1')->group(fn() => 
        Route::get('blog-news', [V1BlogNewController::class, 'index']));
        
Route::post('/pull_from_repo', function(){
    return shell_exec("cd .. ; git pull origin main");
});
