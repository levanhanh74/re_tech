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
        Schema::create('tb_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vnp_OrderInfo');
            $table->string('vnp_OrderType');
            $table->string('vnp_price');
            $table->string('vnp_BankCode');
            $table->string('vnp_IpAddr');
            $table->string('vnp_IpAddr');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                ->references('id')
                ->on('tb_users')->onDelete('cascade');;
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
        Schema::dropIfExists('tb_payment');
    }
};
