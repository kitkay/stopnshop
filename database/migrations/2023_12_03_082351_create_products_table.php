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
            $table->foreignId('category_id')->constrained(
                'categories',
                'id'
            );
            $table->foreignId('staff_id')->constrained(
                'users',
                'id'
            );
            $table->foreignId('price_id')->constrained(
                'prices',
                'id'
            );
            $table->string('sku', 15);
            $table->string('productName', 15)->unique();
            $table->text('decription');
            $table->string('unit', 10);
            $table->integer('quantity');
            $table->timestamps();
            $table->softDeletes();
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
