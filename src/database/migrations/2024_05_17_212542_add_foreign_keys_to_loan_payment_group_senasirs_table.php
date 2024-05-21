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
        Schema::table('loan_payment_group_senasirs', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['period_id'])->references(['id'])->on('loan_payment_periods')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_payment_group_senasirs', function (Blueprint $table) {
            $table->dropForeign('loan_payment_group_senasirs_affiliate_id_foreign');
            $table->dropForeign('loan_payment_group_senasirs_period_id_foreign');
        });
    }
};
