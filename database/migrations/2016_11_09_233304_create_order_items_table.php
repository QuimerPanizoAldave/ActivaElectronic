<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
      {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price',5,2);
            $table->integer('cantidad')->unsigned();
            $table->integer('productos_id')->unsigned();
            $table->foreign('productos_id')
                  ->references('id')
                  ->on('productos')
                  ->onDelete('cascade');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_items');
    }
}
