<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                        Schema::create('soluciones', function (Blueprint $table) {
            $table->increments('id');
             $table->string('slug');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen');
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
         Schema::drop('soluciones');
    }
}
