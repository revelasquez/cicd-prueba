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
        Schema::table('eco_com_applicants', function (Blueprint $table) {
            $table->foreign(['city_birth_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['city_identity_card_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['economic_complement_id'])->references(['id'])->on('economic_complements')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eco_com_applicants', function (Blueprint $table) {
            $table->dropForeign('eco_com_applicants_city_birth_id_foreign');
            $table->dropForeign('eco_com_applicants_city_identity_card_id_foreign');
            $table->dropForeign('eco_com_applicants_economic_complement_id_foreign');
        });
    }
};
