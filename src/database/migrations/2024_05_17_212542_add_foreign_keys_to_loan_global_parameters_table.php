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
        Schema::table('loan_global_parameters', function (Blueprint $table) {
            $table->foreign(['loan_procedure_id'])->references(['id'])->on('loan_procedures')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_global_parameters', function (Blueprint $table) {
            $table->dropForeign('loan_global_parameters_loan_procedure_id_foreign');
        });
    }
};
