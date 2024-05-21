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
        Schema::table('contribution_passives', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['contribution_state_id'])->references(['id'])->on('contribution_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['contribution_type_mortuary_id'])->references(['id'])->on('contribution_type_quota_aids')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contribution_passives', function (Blueprint $table) {
            $table->dropForeign('contribution_passives_affiliate_id_foreign');
            $table->dropForeign('contribution_passives_contribution_state_id_foreign');
            $table->dropForeign('contribution_passives_contribution_type_mortuary_id_foreign');
            $table->dropForeign('contribution_passives_user_id_foreign');
        });
    }
};
