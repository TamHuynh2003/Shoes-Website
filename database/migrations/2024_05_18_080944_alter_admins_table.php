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
        Schema::table('admins', function (Blueprint $table) {

            $table->foreignId('genders_id')->after('login_at')->constrained(
                table: 'genders',
                indexName: 'admins_genders_id'
            );

            $table->foreignId('roles_id')->default(1)->after('genders_id')->constrained(
                table: 'roles',
                indexName: 'admins_roles_id'
            );

            $table->foreignId('status_id')->default(1)->after('roles_id')->constrained(
                table: 'user_states',
                indexName: 'admins_status_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {

            $table->dropForeign(['genders_id', 'roles_id', 'status_id']);

            $table->dropColumn(['genders_id', 'roles_id', 'status_id']);
        });
    }
};
