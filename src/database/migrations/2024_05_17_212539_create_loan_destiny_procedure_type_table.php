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
        Schema::create('loan_destiny_procedure_type', function (Blueprint $table) {
            $table->bigInteger('procedure_type_id')->index();
            $table->bigInteger('loan_destiny_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_destiny_procedure_type');
    }
};
