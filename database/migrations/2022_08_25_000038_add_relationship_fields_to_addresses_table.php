<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAddressesTable extends Migration
{
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id', 'city_fk_7191753')->references('id')->on('cities');
            $table->unsignedBigInteger('delivary_id')->nullable();
            $table->foreign('delivary_id', 'delivary_fk_7191754')->references('id')->on('deliveries');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_7191755')->references('id')->on('users');
        });
    }
}
