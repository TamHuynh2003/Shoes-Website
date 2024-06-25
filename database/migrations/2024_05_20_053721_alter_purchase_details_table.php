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
        Schema::table('purchase_details', function (Blueprint $table) {

            $table->foreignId('purchases_id')->after('purchase_price')->constrained(
                table: 'purchases',
                indexName: 'purchase_details_purchases_id'
            );

            $table->foreignId('products_id')->after('purchases_id')->constrained(
                table: 'products',
                indexName: 'purchase_details_products_id'
            );

            $table->foreignId('colors_id')->after('products_id')->constrained(
                table: 'colors',
                indexName: 'purchase_details_colors_id'
            );

            $table->foreignId('sizes_id')->after('colors_id')->constrained(
                table: 'sizes',
                indexName: 'purchase_details_sizes_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchase_details', function (Blueprint $table) {

            $table->dropForeign(['purchases_id', 'products_id', 'colors_id', 'sizes_id']);

            $table->dropColumn(['purchases_id', 'products_id', 'colors_id', 'sizes_id']);
        });
    }
};
