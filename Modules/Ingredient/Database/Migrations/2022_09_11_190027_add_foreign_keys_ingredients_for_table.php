<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysIngredientsForTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('APP_ENV') !== 'testing') {
            Schema::table('ingredient_slots', function (Blueprint $table) {
                $table->foreign('ingredient_id')->references('id')->on('ingredients');
            });
            Schema::table('ingredient_notifications', function (Blueprint $table) {
                $table->foreign('ingredient_id')->references('id')->on('ingredients');
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
            Schema::table('ingredient_slots', function (Blueprint $table) {
                $table->dropForeign('ingredient_id');
            });

            Schema::table('ingredient_notifications', function (Blueprint $table) {
                $table->dropForeign('ingredient_id');
            });
        }
    }
}
