<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioInformacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_informacions', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario')->index();
            $table->string('documento',40);
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('telefono',30);
            $table->integer('id_ciudad')->index();
            $table->string('direccion',120);
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
        Schema::dropIfExists('usuario_informacions');
    }
}
