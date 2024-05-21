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
        Schema::table('ret_fun_legal_guardian_beneficiary', function (Blueprint $table) {
            $table->foreign(['ret_fun_beneficiary_id'], 'ret_fun_legal_guardian_beneficiary_ret_fun_beneficiary_id_forei')->references(['id'])->on('ret_fun_beneficiaries')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ret_fun_legal_guardian_id'], 'ret_fun_legal_guardian_beneficiary_ret_fun_legal_guardian_id_fo')->references(['id'])->on('ret_fun_legal_guardians')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ret_fun_legal_guardian_beneficiary', function (Blueprint $table) {
            $table->dropForeign('ret_fun_legal_guardian_beneficiary_ret_fun_beneficiary_id_forei');
            $table->dropForeign('ret_fun_legal_guardian_beneficiary_ret_fun_legal_guardian_id_fo');
        });
    }
};
