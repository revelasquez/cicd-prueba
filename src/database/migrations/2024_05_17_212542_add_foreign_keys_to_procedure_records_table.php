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
        Schema::table('procedure_records', function (Blueprint $table) {
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
        Schema::table('procedure_records', function (Blueprint $table) {
            $table->dropForeign('procedure_records_record_type_id_foreign');
            $table->dropForeign('procedure_records_user_id_foreign');
            $table->dropForeign('procedure_records_wf_state_id_foreign');
        });
    }
};
