<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_slots', function (Blueprint $table) {
            $table->id();
            $table->string('title');// x-large , large , ...
            $table->foreignId('ingredient_id');
            $table->unsignedSmallInteger('slot');// 100, 150, 200 gram or any quantity
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
        Schema::dropIfExists('ingredient_slots');
    }
}
