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
        Schema::create('eco_com_submitted_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('economic_complement_id');
            $table->bigInteger('procedure_requirement_id');
            $table->boolean('is_valid')->default(false);
            $table->date('reception_date');
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->unique(['economic_complement_id', 'procedure_requirement_id'], 'eco_com_submitted_documents_economic_complement_id_procedure_re');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_com_submitted_documents');
    }
};
