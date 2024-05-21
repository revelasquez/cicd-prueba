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
        Schema::create('procedure_modalities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('procedure_type_id')->nullable();
            $table->string('name');
            $table->string('shortened')->nullable();
            $table->boolean('is_valid')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedure_modalities');
    }
};
