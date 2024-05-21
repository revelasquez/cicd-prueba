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
        Schema::table('quota_aid_correlatives', function (Blueprint $table) {
            $table->foreign(['procedure_type_id'])->references(['id'])->on('procedure_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['quota_aid_mortuary_id'])->references(['id'])->on('quota_aid_mortuaries')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['wf_state_id'])->references(['id'])->on('wf_states')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quota_aid_correlatives', function (Blueprint $table) {
            $table->dropForeign('quota_aid_correlatives_procedure_type_id_foreign');
            $table->dropForeign('quota_aid_correlatives_quota_aid_mortuary_id_foreign');
            $table->dropForeign('quota_aid_correlatives_user_id_foreign');
            $table->dropForeign('quota_aid_correlatives_wf_state_id_foreign');
        });
    }
};
