<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ShoppinglistController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, PATCH, DELETE');
header('Access-Control-Allow-Headers: Accept, Content-Type, X-Auth-Token, Origin, Authorization');

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

// Route::get('user', [AuthController::class, 'user']);

//Protected Routes
Route::middleware('auth:sanctum')->prefix('v1')->group(function() {
    Route::get('/user', [UserController::class, 'getUser']);
    Route::get('/userlists', [UserController::class, 'getLists']);
    Route::apiResource('/lists', ListsController::class);
    Route::apiResource('/recipe', RecipesController::class);
    Route::apiResource('/shoppinglist', ShoppinglistController::class);
    Route::apiResource('/ingredient', IngredientController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});

//Public routes
Route::get('/lists/search/{name}', [ListsController::class, 'search']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/getusers', [UserController::class, 'getAllUsers']);


