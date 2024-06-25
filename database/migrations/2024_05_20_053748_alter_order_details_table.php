<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('order_details', function (Blueprint $table) {

            $table->foreignId('orders_id')->after('selling_price')->constrained(
                table: 'orders',
                indexName: 'order_details_orders_id'
            );

            $table->foreignId('products_id')->after('orders_id')->constrained(
                table: 'products',
                indexName: 'order_details_products_id'
            );

            $table->foreignId('colors_id')->after('products_id')->constrained(
                table: 'colors',
                indexName: 'order_details_colors_id'
            );

            $table->foreignId('sizes_id')->after('colors_id')->constrained(
                table: 'sizes',
                indexName: 'order_details_sizes_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_details', function (Blueprint $table) {

            $table->dropForeign(['orders_id', 'products_id', 'colors_id', 'sizes_id']);

            $table->dropColumn(['orders_id', 'products_id', 'colors_id', 'sizes_id']);
        });
    }
};
