<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class Categorie_IngredientController extends Controller
{
    function getCategorie_Ingredient()
    {
        $categorie = Categorie::all();
        $ingredient =Ingredient::all();

        return view('Index',[
            'categorie'=>$categorie,
            'ingredient'=>$ingredient
        ]);


    }
}
