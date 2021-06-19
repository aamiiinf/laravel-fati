<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('invoice_no');
            $table->string('payment_type');
            $table->string('total');
            $table->string('subtotal');
            $table->integer('coupon_discount')->nullable();
            $table->timestamps();
//            $table->timestamps();
//            $table->increments('order_id');
//            $table->date("date");
//            $table->text("status");
//            $table->date("del_date");


//            $table->decimal("price",8,2);
//            $table->string("price");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
