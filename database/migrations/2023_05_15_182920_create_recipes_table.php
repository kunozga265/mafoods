<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("user_id")->nullable();
            $table->string("user_email")->nullable();
            $table->string("user_name")->nullable();
            $table->double("final_cooked_weight");
            $table->double("initial_weight");
            $table->json("ingredients");

            $table->double("moisture")->nullable();
            $table->double("energy_kcal")->nullable();
            $table->double("energy_kj")->nullable();
            $table->double("nitrogen")->nullable();
            $table->double("protein")->nullable();
            $table->double("fats")->nullable();
            $table->double("saturated_fa")->nullable();
            $table->double("monounsaturated_fa")->nullable();
            $table->double("polyunsaturated_fa")->nullable();
            $table->double("cholesterol")->nullable();
            $table->double("cho_udb")->nullable();
            $table->double("cho_avail")->nullable();
            $table->double("sugars")->nullable();
            $table->double("added_sugar")->nullable();
            $table->double("fibre")->nullable();
            $table->double("starch")->nullable();
            $table->double("ash")->nullable();
            $table->double("ca")->nullable();
            $table->double("fe")->nullable();
            $table->double("mg")->nullable();
            $table->double("p")->nullable();
            $table->double("k")->nullable();
            $table->double("na")->nullable();
            $table->double("zn")->nullable();
            $table->double("cu")->nullable();
            $table->double("mn")->nullable();
            $table->double("i")->nullable();
            $table->double("se")->nullable();
            $table->double("vitamin_a_rae")->nullable();
            $table->double("vitamin_a_re")->nullable();
            $table->double("thiamin")->nullable();
            $table->double("riboflavin")->nullable();
            $table->double("niacin")->nullable();
            $table->double("vitamin_b6")->nullable();
            $table->double("folic_acid")->nullable();
            $table->double("vitamin_b12")->nullable();
            $table->double("pantothenate")->nullable();
            $table->double("biotin")->nullable();
            $table->double("vitamin_c")->nullable();
            $table->double("vitamin_d")->nullable();
            $table->double("vitamin_e")->nullable();
            $table->double("phytic_acid")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
