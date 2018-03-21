<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigop');
            $table->string('imagen');
            $table->string('marca');
            $table->string('slug');
            $table->string('modelo');
            $table->string('calificacion');
            $table->integer('stock');
            $table->double('preciod',5,2);
            $table->double('precios',5,2);
            $table->text('descrip');
            $table->longText('description');
            $table->longText('ficha');
            $table->string('diagrama');

            $table->timestamps();
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');
    }
}
