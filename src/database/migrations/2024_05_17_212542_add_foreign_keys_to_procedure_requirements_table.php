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
        Schema::table('procedure_requirements', function (Blueprint $table) {
            $table->foreign(['procedure_document_id'])->references(['id'])->on('procedure_documents')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_modality_id'])->references(['id'])->on('procedure_modalities')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('procedure_requirements', function (Blueprint $table) {
            $table->dropForeign('procedure_requirements_procedure_document_id_foreign');
            $table->dropForeign('procedure_requirements_procedure_modality_id_foreign');
        });
    }
};
