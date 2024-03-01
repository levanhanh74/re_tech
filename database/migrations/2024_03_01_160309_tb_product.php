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
        Schema::create('tb_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->string('warranty'); // bảo hành
            $table->string('image');
            $table->string('accessories'); // phụ kiện
            $table->string('condition'); // tình trạng còn hàng
            $table->tinyInteger('status'); // trạng thái
            $table->string('promotion'); // khuyến mãi
            $table->string('description');
            $table->tinyInteger('feature'); // nổi bật

            $table->integer('id_category')->unsigned(); // unsigned này nó bắt buộc trường này là integer
            $table->foreign('id_category')
                ->references('id')
                ->on('tb_category')
                ->onDelete('cascade'); // foreign là khóa phụ. và nó chỉ cho xóa không cho update
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
        Schema::dropIfExists('tb_product');
    }
};
