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
        Schema::table('quota_aid_mortuaries', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('restrict');
            $table->foreign(['city_end_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['city_start_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_modality_id'])->references(['id'])->on('procedure_modalities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_state_id'])->references(['id'])->on('procedure_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['quota_aid_procedure_id'])->references(['id'])->on('quota_aid_procedures')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['wf_state_current_id'])->references(['id'])->on('wf_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['workflow_id'])->references(['id'])->on('workflows')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quota_aid_mortuaries', function (Blueprint $table) {
            $table->dropForeign('quota_aid_mortuaries_affiliate_id_foreign');
            $table->dropForeign('quota_aid_mortuaries_city_end_id_foreign');
            $table->dropForeign('quota_aid_mortuaries_city_start_id_foreign');
            $table->dropForeign('quota_aid_mortuaries_procedure_modality_id_foreign');
            $table->dropForeign('quota_aid_mortuaries_procedure_state_id_foreign');
            $table->dropForeign('quota_aid_mortuaries_quota_aid_procedure_id_foreign');
            $table->dropForeign('quota_aid_mortuaries_user_id_foreign');
            $table->dropForeign('quota_aid_mortuaries_wf_state_current_id_foreign');
            $table->dropForeign('quota_aid_mortuaries_workflow_id_foreign');
        });
    }
};
