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
        Schema::table('ret_fun_templates', function (Blueprint $table) {
            $table->foreign(['ret_fun_procedure_id'])->references(['id'])->on('ret_fun_procedures')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['wf_state_id'])->references(['id'])->on('wf_states')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ret_fun_templates', function (Blueprint $table) {
            $table->dropForeign('ret_fun_templates_ret_fun_procedure_id_foreign');
            $table->dropForeign('ret_fun_templates_wf_state_id_foreign');
        });
    }
};
