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
        Schema::table('direct_contribution_submitted_documents', function (Blueprint $table) {
            $table->foreign(['direct_contribution_id'], 'direct_contribution_submitted_documents_direct_contribution_id_')->references(['id'])->on('direct_contributions')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_requirement_id'], 'direct_contribution_submitted_documents_procedure_requirement_i')->references(['id'])->on('procedure_requirements')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('direct_contribution_submitted_documents', function (Blueprint $table) {
            $table->dropForeign('direct_contribution_submitted_documents_direct_contribution_id_');
            $table->dropForeign('direct_contribution_submitted_documents_procedure_requirement_i');
        });
    }
};
