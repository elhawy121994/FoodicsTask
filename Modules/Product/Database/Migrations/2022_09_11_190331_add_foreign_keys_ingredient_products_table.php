<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysIngredientProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('APP_ENV') !== 'testing') {
            Schema::table('product_ingredients', function (Blueprint $table) {
                $table->foreign('ingredient_id')->references('id')->on('ingredients');
                $table->foreign('product_id')->references('id')->on('products');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (env('APP_ENV') !== 'testing') {
            Schema::table('product_ingredients', function (Blueprint $table) {
                $table->dropForeign('ingredient_id');
                $table->dropForeign('product_id');
            });
        }
    }
}
