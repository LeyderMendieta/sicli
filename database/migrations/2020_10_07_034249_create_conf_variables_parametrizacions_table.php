<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfVariablesParametrizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_variables_parametrizacions', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_variable',50);
            $table->string('variable_valor',45);
            $table->string('variable_etiqueta',100);
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
        Schema::dropIfExists('conf_variables_parametrizacions');
    }
}
