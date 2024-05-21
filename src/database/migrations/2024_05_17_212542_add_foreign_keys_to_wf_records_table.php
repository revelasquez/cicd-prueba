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
        Schema::table('wf_records', function (Blueprint $table) {
            $table->foreign(['old_user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['old_wf_state_id'])->references(['id'])->on('wf_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['record_type_id'])->references(['id'])->on('record_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['wf_state_id'])->references(['id'])->on('wf_states')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wf_records', function (Blueprint $table) {
            $table->dropForeign('wf_records_old_user_id_foreign');
            $table->dropForeign('wf_records_old_wf_state_id_foreign');
            $table->dropForeign('wf_records_record_type_id_foreign');
            $table->dropForeign('wf_records_user_id_foreign');
            $table->dropForeign('wf_records_wf_state_id_foreign');
        });
    }
};
