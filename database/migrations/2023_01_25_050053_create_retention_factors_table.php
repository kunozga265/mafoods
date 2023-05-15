<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetentionFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retention_factors', function (Blueprint $table) {
            $table->id();
            $table->integer("food_type_id");
            $table->string("cooking_method");
            $table->double("ca");
            $table->double("fe");
            $table->double("mg");
            $table->double("p");
            $table->double("k");
            $table->double("na");
            $table->double("zn");
            $table->double("cu");
            $table->double("others");
            $table->double("vitamin_a_rae");
            $table->double("carotenoids");
            $table->double("vitamin_d");
            $table->double("vitamin_e");
            $table->double("vitamin_k");
            $table->double("thiamin");
            $table->double("riboflavin");
            $table->double("niacin");
            $table->double("vitamin_b6");
            $table->double("folic_acid");
            $table->double("vitamin_b12");
            $table->double("pantothenate");
            $table->double("biotin");
            $table->double("vitamin_c");
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
        Schema::dropIfExists('retention_factors');
    }
}
