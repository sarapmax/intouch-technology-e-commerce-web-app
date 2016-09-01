<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('name')->unique();
            $table->float('price');
            $table->mediumText('shortdesc');
            $table->longText('longdesc');
            $table->longText('specfications');
            $table->string('thumb_image');
            $table->mediumText('images');
            $table->float('stock')->nullable();
            $table->enum('live', [1, 0])->default(1);
            $table->timestamps();

            $table->foreign('category_id')->references('id')
                                          ->on('categories')
                                          ->onUpdate('cascade')
                                          ->onDelete('cascade');;


        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
