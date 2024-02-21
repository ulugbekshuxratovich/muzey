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
        Schema::create('leaders_museums', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->string('name', 400);
            $table->string('position', 400);
            $table->integer('phone');
            $table->date('ReceptionDays');
            $table->string('email');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->text('content_uz');
            $table->text('content_ru');
            $table->text('content_en');
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
        Schema::dropIfExists('leaders_museums');
    }
};
