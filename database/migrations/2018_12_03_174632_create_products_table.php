<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->integer('price')->default(0);
            $table->unsignedInteger('category')->nullable();
            $table->foreign('category')->references('id')->on('categories');
            $table->unsignedInteger('company')->nullable();
            $table->foreign('company')->references('id')->on('companies');
            $table->string('img_url1')->nullable();
            $table->string('img_url2')->nullable();
            $table->string('img_url3')->nullable();
            $table->string('brochure')->nullable();
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
