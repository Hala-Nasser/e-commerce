<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('price', 15, 2);
            $table->integer('quantity');
            $table->float('discount_percentage', 15, 2)->nullable();
            $table->float('weight', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
