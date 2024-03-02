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
            $table->string('product_name');
            $table->string('product_image')->nullable();
            $table->longText('product_description')->nullable();
            $table->string('product_brand')->nullable();
            $table->string('product_category');
            $table->decimal('product_price');
            $table->unsignedInteger('product_amount')->default(0);
            $table->decimal('product_score', 2, 1)->default(0);
            $table->unsignedInteger('product_reviews_amount')->default(0);
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
