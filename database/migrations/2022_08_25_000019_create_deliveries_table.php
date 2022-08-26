<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('price', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
