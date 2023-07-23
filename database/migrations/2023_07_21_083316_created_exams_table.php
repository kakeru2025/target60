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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained();
            $table->unsignedTinyInteger('number');
            $table->unsignedTinyInteger('subnumber')->nullable();
            $table->string('question_string');
            $table->string('question_image_url')->nullable();
            $table->string('answer', 50);
            $table->text('explanation_string');
            $table->string('explanation_image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
};