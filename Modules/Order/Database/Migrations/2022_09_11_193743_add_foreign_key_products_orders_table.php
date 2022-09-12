<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyProductsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('APP_ENV') !== 'testing') {
            Schema::table('products_order', function (Blueprint $table) {
                $table->foreign('product_id')->references('id')->on('products');
                $table->foreign('order_id')->references('id')->on('orders');
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
            Schema::table('products_order', function (Blueprint $table) {
                $table->dropForeign('product_id');
                $table->dropForeign('order_id');
            });
        }
    }
}
