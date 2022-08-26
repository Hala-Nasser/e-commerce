<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeValueInventoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('attribute_value_inventory', function (Blueprint $table) {
            $table->unsignedBigInteger('inventory_id');
            $table->foreign('inventory_id', 'inventory_id_fk_7207113')->references('id')->on('inventories')->onDelete('cascade');
            $table->unsignedBigInteger('attribute_value_id');
            $table->foreign('attribute_value_id', 'attribute_value_id_fk_7207113')->references('id')->on('attribute_values')->onDelete('cascade');
        });
    }
}
