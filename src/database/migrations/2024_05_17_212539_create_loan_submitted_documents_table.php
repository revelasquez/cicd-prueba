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
        Schema::create('loan_submitted_documents', function (Blueprint $table) {
            $table->bigInteger('loan_id')->index();
            $table->bigInteger('procedure_document_id')->index();
            $table->date('reception_date');
            $table->string('comment')->nullable();
            $table->boolean('is_valid')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_submitted_documents');
    }
};
