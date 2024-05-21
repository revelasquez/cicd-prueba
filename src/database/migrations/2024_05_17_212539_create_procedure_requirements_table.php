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
        Schema::create('procedure_requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('procedure_modality_id');
            $table->bigInteger('procedure_document_id')->nullable();
            $table->integer('number');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedure_requirements');
    }
};
