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
        Schema::create('farmer_invitation', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('farmer_id')->nullable();
            $table->uuid('invitation_id')->nullable();
            // Ajoutez d'autres colonnes si nécessaire
            $table->string('meeting_attendance')->nullable();

            // Clés étrangères
            $table->foreign('farmer_id')->references('id')->on('farmers')->onDelete('cascade');
            $table->foreign('invitation_id')->references('id')->on('invitations')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_invitation');
    }
};
