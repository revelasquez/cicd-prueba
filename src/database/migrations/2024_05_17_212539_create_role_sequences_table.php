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
        Schema::create('role_sequences', function (Blueprint $table) {
            $table->bigInteger('procedure_type_id');
            $table->bigInteger('role_id');
            $table->bigInteger('next_role_id');
            $table->smallInteger('sequence_number_flow')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_sequences');
    }
};
