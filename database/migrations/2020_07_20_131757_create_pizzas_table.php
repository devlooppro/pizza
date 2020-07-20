<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('pizza_ingredient', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pizza_id');
            $table->unsignedBigInteger('ingredient_id');

            $table->foreign('pizza_id')->references('id')->on('pizzas')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('ingredient_id')->references('id')->on('ingredients')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
}
