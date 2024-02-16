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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('code_sales');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->bigInteger('price');
            $table->bigInteger('quantity');
            $table->bigInteger('total_price');
            $table->bigInteger('payment');
            $table->bigInteger('return');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
