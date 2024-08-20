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
        Schema::create('activities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->string('qte')->nullable();
            $table->string('type_activity')->nullable();
            $table->dateTime('date')->nullable();
            $table->uuid('type_produit_id')->nullable();
            $table->uuid('type_entretien_id')->nullable();
            $table->uuid('farmer_id')->nullable();
            $table->uuid('user_id')->nullable();
            $table->foreign('type_produit_id')->references('id')->on('type_produits');
            $table->foreign('type_entretien_id')->references('id')->on('type_entretiens');
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
        Schema::dropIfExists('activities');
    }
};
