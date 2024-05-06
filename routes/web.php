<?php

use App\Http\Controllers\Categorie_IngredientController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PlatController;
use App\Models\Plat;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[Categorie_IngredientController::class,'getCategorie_Ingredient'])->name('home');
Route::get('ingredientForm',[CategorieController::class,'getCategorie'])->name('ingredientForm');
Route::get('categorieForm',function ()  {
    return view('categorieForm');
})->name('categorieForm');
Route::post('/',[CategorieController::class,'categoriePost'])->name('categoriePost');
Route::post('ingredientPost',[FormController::class,'ingredientPost'])->name('ingredientPost');
Route::get('listRecette',[PlatController::class,'getPlat'])->name('listRecette');

Route::post('csvExport',[Categorie_IngredientController::class,'exportCsv'])->name('export');
Route::post('csvImport',[Categorie_IngredientController::class,'importCsv'])->name('import');
