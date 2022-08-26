<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToItemsTable extends Migration
{
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->unsignedBigInteger('page_id')->nullable();
            $table->foreign('page_id', 'page_fk_7191620')->references('id')->on('pages');
        });
    }
}
