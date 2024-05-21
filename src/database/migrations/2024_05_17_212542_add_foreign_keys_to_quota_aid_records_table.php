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
        Schema::table('quota_aid_records', function (Blueprint $table) {
            $table->foreign(['quota_aid_id'])->references(['id'])->on('quota_aid_mortuaries')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quota_aid_records', function (Blueprint $table) {
            $table->dropForeign('quota_aid_records_quota_aid_id_foreign');
            $table->dropForeign('quota_aid_records_user_id_foreign');
        });
    }
};
