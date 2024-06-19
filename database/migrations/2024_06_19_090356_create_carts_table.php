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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->integer('qty');
            $table->double('total');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('variant_product_id')->constrained('variant_products')->onDelete('cascade');
            $table->foreignId('sub_variant_product_id')->constrained('sub_variant_products')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
