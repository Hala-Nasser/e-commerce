<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInventoriesTable extends Migration
{
    public function up()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id', 'product_fk_7191712')->references('id')->on('products');
            $table->unsignedBigInteger('attribute_value_id')->nullable();
            $table->foreign('attribute_value_id', 'attribute_value_fk_7191713')->references('id')->on('attribute_values');
        });
    }
}
