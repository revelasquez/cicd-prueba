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
        Schema::table('quota_aid_beneficiary_legal_guardian', function (Blueprint $table) {
            $table->foreign(['quota_aid_beneficiary_id'], 'quota_aid_beneficiary_legal_guardian_quota_aid_beneficiary_id_f')->references(['id'])->on('quota_aid_beneficiaries')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['quota_aid_legal_guardian_id'], 'quota_aid_beneficiary_legal_guardian_quota_aid_legal_guardian_i')->references(['id'])->on('quota_aid_legal_guardians')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quota_aid_beneficiary_legal_guardian', function (Blueprint $table) {
            $table->dropForeign('quota_aid_beneficiary_legal_guardian_quota_aid_beneficiary_id_f');
            $table->dropForeign('quota_aid_beneficiary_legal_guardian_quota_aid_legal_guardian_i');
        });
    }
};
