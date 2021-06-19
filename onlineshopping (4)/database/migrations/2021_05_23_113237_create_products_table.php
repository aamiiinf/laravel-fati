<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code');
            $table->string('product_quantity');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('price');
            $table->string('image_one');
            $table->string('image_two');
            $table->string('image_three');
            $table->string('status')->default(1);
            $table->timestamps();


//            $table->text('material');
//            $table->text('');
//            $table->string('image');
//            $table->decimal('price', $precision = 8, $scale = 2);



//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
//            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
