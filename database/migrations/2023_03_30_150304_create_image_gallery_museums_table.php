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
        Schema::create('image_gallery_museums', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->string('title_uz', 400);
            $table->string('title_en', 400);
            $table->string('title_ru', 400);
            $table->foreignId('gallery_museum_id')->nullable()->constrained();
            $table->boolean('status')->nullable();
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('image_gallery_museums');
    }
};
