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
        Schema::table('eco_com_legal_guardians', function (Blueprint $table) {
            $table->foreign(['city_identity_card_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['eco_com_legal_guardian_type_id'])->references(['id'])->on('eco_com_legal_guardian_types')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['economic_complement_id'])->references(['id'])->on('economic_complements')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eco_com_legal_guardians', function (Blueprint $table) {
            $table->dropForeign('eco_com_legal_guardians_city_identity_card_id_foreign');
            $table->dropForeign('eco_com_legal_guardians_eco_com_legal_guardian_type_id_foreign');
            $table->dropForeign('eco_com_legal_guardians_economic_complement_id_foreign');
        });
    }
};
