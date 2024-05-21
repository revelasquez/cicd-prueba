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
        Schema::create('ret_fun_procedures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('annual_yield', 13);
            $table->decimal('administrative_expenses', 13);
            $table->integer('contributions_number');
            $table->boolean('is_enabled')->default(true);
            $table->timestamps();
            $table->integer('contribution_regulate_days')->default(90);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ret_fun_procedures');
    }
};
