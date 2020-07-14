<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50);
            $table->string('string');
            $table->double('price');
            $table->double('old_price');
            $table->json('contains');
            $table->string('description', 200);
            $table->string('short_description');
            $table->boolean('status');
            $table->integer('category_id');
            $table->boolean('is_popular');
            $table->boolean('is_top_sellin');
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
        Schema::dropIfExists('products');
    }
}
