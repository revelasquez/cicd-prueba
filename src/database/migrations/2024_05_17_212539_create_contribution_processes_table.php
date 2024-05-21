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
        Schema::create('contribution_processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('wf_state_current_id');
            $table->bigInteger('workflow_id');
            $table->bigInteger('procedure_state_id');
            $table->bigInteger('direct_contribution_id');
            $table->date('date');
            $table->string('code');
            $table->boolean('inbox_state')->default(false);
            $table->timestamps();
            $table->decimal('total', 13)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_processes');
    }
};
