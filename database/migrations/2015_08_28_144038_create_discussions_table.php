<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'discussions',
            function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('name');
                    $table->mediumText('description');
                    $table->integer('link_id')->unsigned();
                    $table->string('link_type');
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
        Schema::drop('discussions');
    }
}
