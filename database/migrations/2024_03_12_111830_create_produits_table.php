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
        Schema::create('produits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('qte')->nullable();
            $table->dateTime('distribution_date')->nullable();
            $table->uuid('type_produit_id')->nullable();
            $table->uuid('farmer_id')->nullable();
            $table->uuid('user_id')->nullable();
            $table->foreign('type_produit_id')->references('id')->on('type_produits');
            $table->foreign('farmer_id')->references('id')->on('farmers');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
