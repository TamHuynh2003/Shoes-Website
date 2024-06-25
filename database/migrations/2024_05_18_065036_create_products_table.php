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
        Schema::create('products', function (Blueprint $table) {

            $table->id();

            $table->string('name');
            $table->string('descriptions')->nullable();

            $table->float('purchase_price');
            $table->float('selling_price');

            // $table->decimal('purchase_price', 5, 2);
            // $table->decimal('selling_price', 5, 2);

            $table->float('rating')->default(3);

            $table->boolean('is_deleted')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
