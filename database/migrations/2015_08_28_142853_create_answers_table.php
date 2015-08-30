<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'answers',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('type');
                $table->longText('textual');
                $table->boolean('correct');
                $table->integer('question_id')->unsigned();
                $table->foreign('question_id')->references('id')->on('questions')
                    ->onDelete('cascade');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answers');
    }
}
