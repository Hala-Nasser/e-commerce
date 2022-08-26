<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusesTable extends Migration
{
    public function up()
    {
        Schema::create('contactuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('name');
            $table->string('subject');
            $table->longText('message');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
