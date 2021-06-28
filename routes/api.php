<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\AuthController;

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

// Public routes
Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/{recipe}', [RecipeController::class, 'show']);

Route::get('/recipes/{recipe}/instructions', [RecipeController::class, 'show_instructions']);

Route::get('/recipes/{recipe}/ingredients', [RecipeController::class, 'show_ingredients']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/recipes', [RecipeController::class, 'store']);

    Route::post('/recipes/{recipe}/instructions', [InstructionController::class, 'store']);
    
    Route::post('/recipes/{recipe}/ingredients', [IngredientController::class, 'store']);

    Route::post('/logout', [AuthController::class, 'logout']);
});