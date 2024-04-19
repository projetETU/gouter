<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\V_plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    function getPlat()  {
       $plats =   V_plat::all();
       return view('Recette',['plats'=>$plats]);
    }
    // function makePlate()  {
    //     Plat::insert($plats);
    // }
}
