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
        Schema::create('eco_com_modalities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('shortened');
            $table->string('description');
            $table->bigInteger('procedure_modality_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_com_modalities');
    }
};
