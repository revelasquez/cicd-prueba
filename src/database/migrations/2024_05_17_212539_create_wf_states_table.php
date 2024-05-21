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
        Schema::create('wf_states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('module_id');
            $table->bigInteger('role_id');
            $table->string('name');
            $table->string('first_shortened')->nullable();
            $table->integer('sequence_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wf_states');
    }
};
