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
        Schema::table('customer_carts', function (Blueprint $table) {

            $table->foreignId('users_id')->after('total_price')->constrained(
                table: 'users',
                indexName: 'customer_carts_users_id'
            );

            $table->foreignId('products_id')->after('users_id')->constrained(
                table: 'products',
                indexName: 'customer_carts_products_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_carts', function (Blueprint $table) {

            $table->dropForeign(['users_id', 'products_id']);

            $table->dropColumn(['users_id', 'products_id']);
        });
    }
};
