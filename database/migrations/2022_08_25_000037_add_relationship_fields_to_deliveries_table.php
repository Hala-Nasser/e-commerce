<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDeliveriesTable extends Migration
{
    public function up()
    {
        Schema::table('deliveries', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id', 'city_fk_7191745')->references('id')->on('cities');
        });
    }
}
