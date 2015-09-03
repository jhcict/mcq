<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'papers',
            function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('description');
                $table->date('year');
                $table->boolean('official')->default(false);
                $table->integer('subject_id')->unsigned();
                $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
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
        Schema::drop('papers');
    }
}
