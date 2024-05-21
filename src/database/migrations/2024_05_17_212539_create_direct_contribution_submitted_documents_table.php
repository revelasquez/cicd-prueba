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
        Schema::create('direct_contribution_submitted_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('direct_contribution_id');
            $table->bigInteger('procedure_requirement_id');
            $table->date('reception_date');
            $table->date('comment')->nullable();
            $table->boolean('is_valid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_contribution_submitted_documents');
    }
};
