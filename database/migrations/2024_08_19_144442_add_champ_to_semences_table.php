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
        Schema::table('semences', function (Blueprint $table) {
            $table->string('cycle')->nullable();
            $table->string('rendement_moyen')->nullable();
            $table->string('rendement_potentiel')->nullable();
            $table->string('zone_culture')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('semences', function (Blueprint $table) {
            $table->dropColumn('cycle');
            $table->dropColumn('rendement_moyen');
            $table->dropColumn('rendement_potentiel');
            $table->dropColumn('zone_culture');
        });
    }
};
