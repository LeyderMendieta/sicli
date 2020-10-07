<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatVentaUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_venta_usuarios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_producto_venta')->index();
            $table->integer('id_usuario_emisor')->index();
            $table->string('mensaje_emisor',250);
            $table->integer('id_usuario_receptor')->index();
            $table->string('mensaje_receptor',250);
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
        Schema::dropIfExists('chat_venta_usuarios');
    }
}
