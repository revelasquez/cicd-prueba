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
        Schema::table('ret_fun_advisor_beneficiary', function (Blueprint $table) {
            $table->foreign(['ret_fun_advisor_id'])->references(['id'])->on('ret_fun_advisors')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ret_fun_beneficiary_id'])->references(['id'])->on('ret_fun_beneficiaries')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ret_fun_advisor_beneficiary', function (Blueprint $table) {
            $table->dropForeign('ret_fun_advisor_beneficiary_ret_fun_advisor_id_foreign');
            $table->dropForeign('ret_fun_advisor_beneficiary_ret_fun_beneficiary_id_foreign');
        });
    }
};
