<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW V_plats AS
        SELECT plats.plat AS Plat ,
        ingredients.nom AS Ingredients,
        plats.quantiter AS quantiter  ,
        plats.type AS Types FROM plats
        JOIN ingredients ON plats.ingredient=ingredients.id
        JOIN types ON plats.type=types.id


        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW V_plats");
    }
};
