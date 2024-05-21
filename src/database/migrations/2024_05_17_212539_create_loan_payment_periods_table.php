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
        Schema::create('loan_payment_periods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('year');
            $table->integer('month');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('importation')->nullable()->default(false);
            $table->enum('importation_type', ['COMANDO', 'SENASIR'])->nullable();

            $table->unique(['year', 'month', 'importation_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_payment_periods');
    }
};
