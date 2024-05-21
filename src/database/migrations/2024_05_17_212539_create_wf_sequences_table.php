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
        Schema::create('wf_sequences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('workflow_id');
            $table->bigInteger('wf_state_current_id');
            $table->bigInteger('wf_state_next_id');
            $table->enum('action', ['Aprobar', 'Denegar']);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wf_sequences');
    }
};
