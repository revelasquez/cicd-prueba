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
        Schema::table('quota_aid_beneficiary_testimony', function (Blueprint $table) {
            $table->foreign(['quota_aid_beneficiary_id'], 'quota_aid_beneficiary_testimony_quota_aid_beneficiary_id_foreig')->references(['id'])->on('quota_aid_beneficiaries')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['testimony_id'])->references(['id'])->on('testimonies')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quota_aid_beneficiary_testimony', function (Blueprint $table) {
            $table->dropForeign('quota_aid_beneficiary_testimony_quota_aid_beneficiary_id_foreig');
            $table->dropForeign('quota_aid_beneficiary_testimony_testimony_id_foreign');
        });
    }
};
