<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'questions',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('no');
                $table->string('question');
                $table->longText('explanation');
                $table->enum('language', ['ta','en','si','generic']);
                $table->integer('paper_id')->unsigned();
                $table->foreign('paper_id')->references('id')->on('papers')
                    ->onDelete('cascade');
                $table->timestamps();
                $table->softDeletes();
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
        Schema::drop('questions');
    }
}
