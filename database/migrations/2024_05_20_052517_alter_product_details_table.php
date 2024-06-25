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
        Schema::table('product_details', function (Blueprint $table) {

            $table->foreignId('products_id')->after('quantity')->constrained(
                table: 'products',
                indexName: 'product_details_categories_id'
            );

            $table->foreignId('colors_id')->after('products_id')->constrained(
                table: 'colors',
                indexName: 'product_details_colors_id'
            );

            $table->foreignId('sizes_id')->after('colors_id')->constrained(
                table: 'sizes',
                indexName: 'product_details_sizes_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_details', function (Blueprint $table) {

            $table->dropForeign(['products_id', 'colors_id', 'sizes_id']);

            $table->dropColumn(['products_id', 'colors_id', 'sizes_id']);
        });
    }
};
