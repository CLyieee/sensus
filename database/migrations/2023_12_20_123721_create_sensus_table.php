<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensu', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('address');
            $table->string('precinct');
            
            // Add columns for Fisheries model
            $table->string('fisheries_name');
            $table->integer('fisheries_age');
            $table->string('fisheries_gender');
            $table->string('fisheries_address');
            $table->string('fisheries_precinct');

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
        Schema::dropIfExists('sensu');
    }
}
