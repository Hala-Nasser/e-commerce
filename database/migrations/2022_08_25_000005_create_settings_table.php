<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en');
            $table->string('title_ar');
            $table->longText('description_en');
            $table->longText('keywords_en');
            $table->longText('keywords_ar');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->longText('description_ar');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
