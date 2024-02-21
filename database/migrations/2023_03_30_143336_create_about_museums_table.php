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
        Schema::create('about_museums', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz', 400);
            $table->string('title_ru', 400)->nullable();
            $table->string('title_en', 400)->nullable();
            $table->string('image_url');
            $table->text('sub_content_uz')->nullable();
            $table->text('sub_content_ru')->nullable();
            $table->text('sub_content_en')->nullable();
            $table->text('content_uz')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_en')->nullable();
            $table->string('video_url')->nullable();
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
        Schema::dropIfExists('about_museums');
    }
};
