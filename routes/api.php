<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\IngredientController;

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

Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/{recipe}', [RecipeController::class, 'show']);
Route::post('/recipe', [RecipeController::class, 'store']);
Route::post('/recipes/{id}/update', [RecipeController::class, 'update']);

Route::get('/instructions', [InstructionController::class, 'index']);
Route::get('/instructions/{id}', [InstructionController::class, 'show']);
Route::post('/instructions/{id}', [InstructionController::class, 'update']);

Route::get('/ingredients', [IngredientController::class, 'index']);
Route::get('/ingredients/{id}', [IngredientController::class, 'show']);
Route::post('/ingredients/{id}', [IngredientController::class, 'update']);

Route::get('/recipes/{recipe}/instructions', [RecipeController::class, 'show_instructions']);
Route::post('/recipes/{recipe}/instructions', [InstructionController::class, 'store']);

Route::get('/recipes/{recipe}/ingredients', [RecipeController::class, 'show_ingredients']);
Route::post('/recipes/{recipe}/ingredients', [IngredientController::class, 'store']);
