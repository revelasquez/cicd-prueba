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
        Schema::create('quota_aid_submitted_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('quota_aid_mortuary_id');
            $table->bigInteger('procedure_requirement_id');
            $table->date('reception_date');
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_valid')->default(false);

            $table->unique(['quota_aid_mortuary_id', 'procedure_requirement_id'], 'quota_aid_submitted_documents_quota_aid_mortuary_id_procedure_r');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quota_aid_submitted_documents');
    }
};
