<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientRequest;
use App\Models\Categorie;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function ingredientPost(IngredientRequest $request)  {

        $Ingredient = new Ingredient();
        $categorie = Categorie::all();

        $Ingredient -> categorie =  $request ->input('categorie');
        $Ingredient -> nom = $request ->input('nom');
        $Ingredient -> prix = $request ->input('prix');
        $Ingredient -> calories_100g = $request ->input('calorie');
            try {
                $Ingredient ->save();
                return view('ingredientForm',['categorie'=>$categorie]);
            } catch (\Throwable $th) {
                return "ERREUR RENCONTRÉE LORS DE LA REQUÊTE : " .$th ->getMessage();
            }
    }
}
