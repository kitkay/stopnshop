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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('sale_serial', 50)
                // ->unique()
                ->foreignId('sale_serial')->constrained(
                    'sales',
                    'serial'
                );

            $table->foreignId('staff_id')->constrained(
                'users',
                'id'
            );

            $table->string('reportName', 100);
            $table->string('description', 255);
            $table->decimal('totalSales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
