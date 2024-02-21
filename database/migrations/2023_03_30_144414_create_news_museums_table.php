<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_museums', function (Blueprint $table) {
            $table->id();

            $table->string('title_uz', 450)->nullable();
            $table->string('title_ru', 450)->nullable();
            $table->string('title_en', 450)->nullable();
            $table->string('image_url');
            $table->integer('date');
            $table->longText('content_uz');
            $table->longText('content_ru');
            $table->longText('content_en');
            $table->integer('order');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_museums');
    }
};
