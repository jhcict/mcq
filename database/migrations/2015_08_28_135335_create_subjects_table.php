<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'subjects',
            function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->char('code', 3);
                $table->string('abbreviation');
                $table->integer('category_id')->unsigned();
                $table->foreign('category_id')->references('id')
                    ->on('category')->onDelete('cascade');
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
        Schema::drop('subjects');
    }
}
