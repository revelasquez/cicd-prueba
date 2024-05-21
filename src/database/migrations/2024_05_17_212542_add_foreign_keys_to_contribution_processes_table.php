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
        Schema::table('contribution_processes', function (Blueprint $table) {
            $table->foreign(['direct_contribution_id'])->references(['id'])->on('direct_contributions')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_state_id'])->references(['id'])->on('procedure_states')->onUpdate('no action')->onDelete('no action');
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
        Schema::table('contribution_processes', function (Blueprint $table) {
            $table->dropForeign('contribution_processes_direct_contribution_id_foreign');
            $table->dropForeign('contribution_processes_procedure_state_id_foreign');
            $table->dropForeign('contribution_processes_user_id_foreign');
            $table->dropForeign('contribution_processes_wf_state_current_id_foreign');
            $table->dropForeign('contribution_processes_workflow_id_foreign');
        });
    }
};
