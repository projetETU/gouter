<?php
namespace App\Http\Controllers;
use App\Http\Requests\csvRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Categorie;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use League\Csv\Writer;

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

    function exportCsv(Request $request)  {

        $input =  "App\Models\\". $request->input('btn');
        $fileName = explode('Models\\',$input);
        $data = $input::all();
        $csv = Writer::createFromFileObject(new \SplTempFileObject());
        $enTetes = DB::select("DESCRIBE ".$fileName[1] ."s");
        $head = [];
            foreach ($enTetes as $heads) {
                $head[] = $heads->Field;
            }
            $csv->insertOne( $head);
                foreach ($data as $datas) {
                    $csv->insertOne($datas->toArray());
                }

        $csv->output( $fileName[1].'.csv');
    }
    function importCsv(CsvRequest $request)
    {
        $file = public_path($request->input('import'));
        echo $file;
    }
}
