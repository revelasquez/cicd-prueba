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
        Schema::table('info_loans', function (Blueprint $table) {
            $table->foreign(['affiliate_guarantor_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['quota_aid_mortuary_id'])->references(['id'])->on('quota_aid_mortuaries')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['retirement_fund_id'])->references(['id'])->on('retirement_funds')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('info_loans', function (Blueprint $table) {
            $table->dropForeign('info_loans_affiliate_guarantor_id_foreign');
            $table->dropForeign('info_loans_affiliate_id_foreign');
            $table->dropForeign('info_loans_quota_aid_mortuary_id_foreign');
            $table->dropForeign('info_loans_retirement_fund_id_foreign');
        });
    }
};
