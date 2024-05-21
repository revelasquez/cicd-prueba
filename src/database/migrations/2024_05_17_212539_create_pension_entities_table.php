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
        Schema::create('pension_entities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['APS', 'SENASIR', 'GESTORA', 'AFPS']);
            $table->string('name');
            $table->boolean('is_active')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pension_entities');
    }
};
