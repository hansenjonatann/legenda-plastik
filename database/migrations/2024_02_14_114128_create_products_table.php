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
            $table->string('product_code', 100)->nullable()->default('text');
            $table->string('name');
            $table->foreignId('unit_id')->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->bigInteger('price_of_sales');
            $table->bigInteger('price_of_purchase');
            $table->integer('stock')->default(0);
            $table->bigInteger('total_price');
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
