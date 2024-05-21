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
        Schema::table('quota_aid_advisor_beneficiary', function (Blueprint $table) {
            $table->foreign(['quota_aid_advisor_id'])->references(['id'])->on('quota_aid_advisors')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['quota_aid_beneficiary_id'])->references(['id'])->on('quota_aid_beneficiaries')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quota_aid_advisor_beneficiary', function (Blueprint $table) {
            $table->dropForeign('quota_aid_advisor_beneficiary_quota_aid_advisor_id_foreign');
            $table->dropForeign('quota_aid_advisor_beneficiary_quota_aid_beneficiary_id_foreign');
        });
    }
};
