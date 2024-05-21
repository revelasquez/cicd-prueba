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
        Schema::create('loan_persons', function (Blueprint $table) {
            $table->bigInteger('loan_id')->index();
            $table->bigInteger('personal_reference_id')->index();
            $table->boolean('cosigner')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_persons');
    }
};
