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
        Schema::table('wf_sequences', function (Blueprint $table) {
            $table->foreign(['workflow_id'])->references(['id'])->on('workflows')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wf_sequences', function (Blueprint $table) {
            $table->dropForeign('wf_sequences_workflow_id_foreign');
        });
    }
};
