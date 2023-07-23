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
        Schema::create('commentary_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commentary_id')->constrained();
            $table->unsignedTinyInteger('number');
            $table->string('question_string', 50);
            $table->string('question_image_url')->nullable();
            $table->string('answer');
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
        Schema::dropIfExists('commentary_questions');
    }
};
