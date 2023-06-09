<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_class_id')->nullable();
            $table->foreign('school_class_id')->references('id')->on('school_classes');
            $table->unsignedBigInteger('lecture_id')->nullable();
            $table->foreign('lecture_id')->references('id')->on('lectures');
            $table->integer('order')->nullable();
            $table->unique(['school_class_id', 'lecture_id']);
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
        Schema::dropIfExists('curriculums');
    }
}
