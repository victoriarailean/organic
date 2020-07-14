<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comment', 50);
            $table->integer('product_id');
            $table->integer('user_id');
            $table->boolean('status');
            $table->string('created-at');
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
        Schema::dropIfExists('rewies');
    }
}
