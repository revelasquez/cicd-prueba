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
        Schema::table('retirement_funds', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('restrict');
            $table->foreign(['city_end_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['city_start_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_modality_id'])->references(['id'])->on('procedure_modalities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ret_fun_procedure_id'])->references(['id'])->on('ret_fun_procedures')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ret_fun_state_id'])->references(['id'])->on('ret_fun_states')->onUpdate('no action')->onDelete('cascade');
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
        Schema::table('retirement_funds', function (Blueprint $table) {
            $table->dropForeign('retirement_funds_affiliate_id_foreign');
            $table->dropForeign('retirement_funds_city_end_id_foreign');
            $table->dropForeign('retirement_funds_city_start_id_foreign');
            $table->dropForeign('retirement_funds_procedure_modality_id_foreign');
            $table->dropForeign('retirement_funds_ret_fun_procedure_id_foreign');
            $table->dropForeign('retirement_funds_ret_fun_state_id_foreign');
            $table->dropForeign('retirement_funds_user_id_foreign');
            $table->dropForeign('retirement_funds_wf_state_current_id_foreign');
            $table->dropForeign('retirement_funds_workflow_id_foreign');
        });
    }
};
