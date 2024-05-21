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
        Schema::create('loan_interests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('procedure_modality_id')->index();
            $table->decimal('annual_interest', 5);
            $table->decimal('penal_interest', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_interests');
    }
};
