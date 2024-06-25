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
        Schema::table('discounts', function (Blueprint $table) {

            $table->foreignId('type_discounts_id')->after('end_date')->constrained(
                table: 'type_discounts',
                indexName: 'discounts_type_discounts_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('discounts', function (Blueprint $table) {

            $table->dropForeign(['type_discounts_id']);

            $table->dropColumn(['type_discounts_id']);
        });
    }
};
