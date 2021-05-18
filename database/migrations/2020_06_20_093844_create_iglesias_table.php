<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIglesiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iglesias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('foto_principal');
            $table->string('titulo');
            $table->longText('detalle');
            $table->string('foto_secundario');
            $table->string('foto_fondo');
            $table->string('tipo');
            $table->string('slug');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iglesias');
    }
}
