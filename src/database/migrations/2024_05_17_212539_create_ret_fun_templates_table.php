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
        Schema::create('ret_fun_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('wf_state_id');
            $table->bigInteger('ret_fun_procedure_id');
            $table->text('template')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ret_fun_templates');
    }
};
