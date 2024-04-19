<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Categorie;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class Categorie_IngredientController extends Controller
{
    function getCategorie_Ingredient()
    {
        
        $categorie = Categorie::all();
        $ingredient = DB::select("SELECT ingredients.nom,ingredients.prix,ingredients.calories_100g,categories.categorie FROM ingredients 
        JOIN categories ON  ingredients.categorie = categories.id ");

        return view('Index',[
            'categorie'=>$categorie,
            'ingredient'=>$ingredient
        ]);


    }
}
