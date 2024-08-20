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
        Schema::create('plot_speculation', function (Blueprint $table) {
            $table->uuid('plot_id');
            $table->uuid('speculation_id');

            $table->dateTime('date_debut')->nullable();
            $table->dateTime('date_fin')->nullable();

            $table->timestamps();
            $table->primary(['plot_id', 'speculation_id']);
        
            $table->foreign('plot_id')->references('id')->on('plots')->onDelete('cascade');
            $table->foreign('speculation_id')->references('id')->on('speculations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plot_speculation');
    }
};
