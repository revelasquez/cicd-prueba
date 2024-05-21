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
        Schema::create('loan_tracking_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sequence_number')->comment('orden de los tipos de seguimiento');
            $table->string('name')->nullable()->comment('tipo de seguimiento de préstamos');
            $table->boolean('is_valid')->nullable()->default(true)->comment('campo para habilitar el tipo de seguimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_tracking_types');
    }
};
