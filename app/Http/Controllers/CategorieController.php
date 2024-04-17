<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    function getCategorie()
    {
        $categorie = Categorie::all();
        return view('ingredientForm',['categorie'=>$categorie]);
    }
    function categoriePost(\App\Http\Requests\Categorie  $request)
    {
        $categorie = new Categorie();
        $categorie -> categorie = $request -> input('categorie');
            try{
        $categorie -> save();
        return view('categorieForm');
            }catch(\Throwable $th){
                return "ERREUR RENCONTRÉE LORS DE LA REQUÊTE : " .$th ->getMessage();
            }

    }
}
