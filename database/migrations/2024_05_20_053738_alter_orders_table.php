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
        Schema::table('orders', function (Blueprint $table) {

            $table->foreignId('users_id')->after('shipping_cost')->constrained(
                table: 'users',
                indexName: 'orders_users_id'
            );

            $table->foreignId('admins_id')->after('users_id')->constrained(
                table: 'admins',
                indexName: 'orders_admins_id'
            );

            $table->foreignId('discounts_id')->after('admins_id')->constrained(
                table: 'discounts',
                indexName: 'orders_discounts_id'
            );

            $table->foreignId('payment_methods_id')->after('discounts_id')->constrained(
                table: 'payment_methods',
                indexName: 'orders_payment_methods_id'
            );

            $table->foreignId('status_id')->default(1)->after('payment_methods_id')->constrained(
                table: 'order_states',
                indexName: 'orders_status_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {

            $table->dropForeign(['users_id', 'admins_id', 'discounts_id', 'payment_methods_id', 'status_id']);

            $table->dropColumn(['users_id', 'admins_id', 'discounts_id', 'payment_methods_id', 'status_id']);
        });
    }
};
