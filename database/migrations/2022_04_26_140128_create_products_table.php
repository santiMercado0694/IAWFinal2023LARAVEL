<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('name')->unique();
            $table->text('details')->nullable();
            $table->text('description')->nullable();
            $table->double('price');
            $table->integer('stock');       
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('image_path');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categorias')->onDelete('cascade');
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
};
