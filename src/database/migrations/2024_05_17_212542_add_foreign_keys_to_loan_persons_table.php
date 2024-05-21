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
        Schema::table('loan_persons', function (Blueprint $table) {
            $table->foreign(['loan_id'])->references(['id'])->on('loans')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['personal_reference_id'])->references(['id'])->on('personal_references')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_persons', function (Blueprint $table) {
            $table->dropForeign('loan_persons_loan_id_foreign');
            $table->dropForeign('loan_persons_personal_reference_id_foreign');
        });
    }
};
