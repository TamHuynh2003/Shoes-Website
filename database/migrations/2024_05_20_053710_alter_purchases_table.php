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
        Schema::table('purchases', function (Blueprint $table) {

            $table->foreignId('providers_id')->after('total_price')->constrained(
                table: 'providers',
                indexName: 'purchases_providers_id'
            );

            $table->foreignId('admins_id')->after('providers_id')->constrained(
                table: 'admins',
                indexName: 'purchases_admins_id'
            );

            $table->foreignId('status_id')->default(1)->after('admins_id')->constrained(
                table: 'order_states',
                indexName: 'purchases_status_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchases', function (Blueprint $table) {

            $table->dropForeign(['providers_id', 'admins_id', 'status_id']);

            $table->dropColumn(['providers_id', 'admins_id', 'status_id']);
        });
    }
};
