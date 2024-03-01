<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_checkout_cart', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->tinyInteger('status');
            $table->string('name_product');
            $table->integer('price_product');
            $table->bigInteger('quality_product');
            $table->string('image_product');
            $table->integer('total_product');
           
            $table->integer('id_user')->unsigned();
            $table->integer('id_product')->unsigned();
            
            $table->foreign('id_user')
            ->references('id')
            ->on('tb_users')->onDelete('cascade');
            $table->foreign('id_product')->references('id')
            ->on('tb_product')->onDelete('cascade');

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
        Schema::dropIfExists('tb_checkout_cart');
    }
};
