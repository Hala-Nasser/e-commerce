<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrderDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id', 'order_fk_7191841')->references('id')->on('orders');
            $table->unsignedBigInteger('invintory_id')->nullable();
            $table->foreign('invintory_id', 'invintory_fk_7191842')->references('id')->on('inventories');
        });
    }
}
