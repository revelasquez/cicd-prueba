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
        Schema::table('loan_submitted_documents', function (Blueprint $table) {
            $table->foreign(['loan_id'])->references(['id'])->on('loans')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['procedure_document_id'])->references(['id'])->on('procedure_documents')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_submitted_documents', function (Blueprint $table) {
            $table->dropForeign('loan_submitted_documents_loan_id_foreign');
            $table->dropForeign('loan_submitted_documents_procedure_document_id_foreign');
        });
    }
};
