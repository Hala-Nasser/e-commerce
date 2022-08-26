<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('total_order_weight', 15, 2);
            $table->decimal('total_price', 15, 2);
            $table->date('delivery_date');
            $table->time('delivery_time');
            $table->string('with_delivery');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
