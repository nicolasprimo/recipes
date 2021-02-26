<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;
use App\Models\Recipe;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {    
    return redirect('/recettes');
});

Route::get('/recettes', [RecipeController::class,'index']);
Route::get('/recettes/show/{id}', [RecipeController::class,'show']);
Route::get('/recettes/create',[RecipeController::class,'create']);
Route::get('/recettes/{id}/edit',[RecipeController::class,'edit']);
Route::post('/recettes/{id}',[RecipeController::class,'update']);
Route::post('/recettes',[RecipeController::class,'store']);
Route::post('/recettes/delete/{id}', [RecipeController::class,'destroy']);