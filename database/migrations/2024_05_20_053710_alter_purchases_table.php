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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchases', function (Blueprint $table) {

            $table->dropForeign(['providers_id', 'admins_id']);

            $table->dropColumn(['providers_id', 'admins_id']);
        });
    }
};
