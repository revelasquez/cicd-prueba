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
        Schema::table('quota_aid_advisors', function (Blueprint $table) {
            $table->foreign(['city_identity_card_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['kinship_id'])->references(['id'])->on('kinships')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quota_aid_advisors', function (Blueprint $table) {
            $table->dropForeign('quota_aid_advisors_city_identity_card_id_foreign');
            $table->dropForeign('quota_aid_advisors_kinship_id_foreign');
        });
    }
};
