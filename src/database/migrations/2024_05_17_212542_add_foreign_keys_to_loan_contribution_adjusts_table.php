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
        Schema::table('loan_contribution_adjusts', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['loan_id'])->references(['id'])->on('loans')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_contribution_adjusts', function (Blueprint $table) {
            $table->dropForeign('loan_contribution_adjusts_affiliate_id_foreign');
            $table->dropForeign('loan_contribution_adjusts_loan_id_foreign');
            $table->dropForeign('loan_contribution_adjusts_user_id_foreign');
        });
    }
};
