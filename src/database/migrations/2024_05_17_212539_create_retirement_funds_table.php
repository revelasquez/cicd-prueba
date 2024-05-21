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
        Schema::create('retirement_funds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('affiliate_id');
            $table->bigInteger('procedure_modality_id')->nullable();
            $table->bigInteger('ret_fun_procedure_id')->nullable();
            $table->bigInteger('city_start_id')->nullable();
            $table->bigInteger('city_end_id')->nullable();
            $table->bigInteger('workflow_id');
            $table->bigInteger('wf_state_current_id');
            $table->string('code')->unique();
            $table->date('reception_date')->nullable();
            $table->decimal('average_quotable', 13)->nullable();
            $table->decimal('subtotal_ret_fun', 13)->nullable();
            $table->decimal('total_ret_fun', 13)->nullable();
            $table->decimal('subtotal_availability', 13)->nullable();
            $table->decimal('total_availability', 13)->nullable();
            $table->decimal('total', 13)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('ret_fun_state_id')->nullable();
            $table->boolean('inbox_state')->default(false);
            $table->uuid('uuid')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retirement_funds');
    }
};
