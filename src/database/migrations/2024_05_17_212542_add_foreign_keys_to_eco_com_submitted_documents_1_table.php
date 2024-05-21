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
        Schema::table('eco_com_submitted_documents_1', function (Blueprint $table) {
            $table->foreign(['eco_com_requirement_id'], 'eco_com_submitted_documents_eco_com_requirement_id_foreign')->references(['id'])->on('eco_com_requirements')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['economic_complement_id'], 'eco_com_submitted_documents_economic_complement_id_foreign')->references(['id'])->on('economic_complements')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eco_com_submitted_documents_1', function (Blueprint $table) {
            $table->dropForeign('eco_com_submitted_documents_eco_com_requirement_id_foreign');
            $table->dropForeign('eco_com_submitted_documents_economic_complement_id_foreign');
        });
    }
};
