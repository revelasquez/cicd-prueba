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
        Schema::table('loan_destiny_procedure_type', function (Blueprint $table) {
            $table->foreign(['loan_destiny_id'])->references(['id'])->on('loan_destinies')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_type_id'])->references(['id'])->on('procedure_types')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_destiny_procedure_type', function (Blueprint $table) {
            $table->dropForeign('loan_destiny_procedure_type_loan_destiny_id_foreign');
            $table->dropForeign('loan_destiny_procedure_type_procedure_type_id_foreign');
        });
    }
};
