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
        Schema::table('products', function (Blueprint $table) {

            $table->foreignId('categories_id')->after('rating')->constrained(
                table: 'categories',
                indexName: 'products_categories_id'
            );

            $table->foreignId('providers_id')->after('categories_id')->constrained(
                table: 'providers',
                indexName: 'products_providers_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

            $table->dropForeign(['categories_id', 'providers_id']);

            $table->dropColumn(['categories_id', 'providers_id']);
        });
    }
};
