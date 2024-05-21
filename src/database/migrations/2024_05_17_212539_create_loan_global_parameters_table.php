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
        Schema::create('loan_global_parameters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('offset_ballot_day');
            $table->smallInteger('offset_interest_day');
            $table->smallInteger('livelihood_amount')->nullable();
            $table->smallInteger('min_service_years');
            $table->smallInteger('min_service_years_adm');
            $table->smallInteger('max_guarantor_active');
            $table->smallInteger('max_guarantor_passive');
            $table->smallInteger('date_delete_payment');
            $table->smallInteger('max_loans_active');
            $table->smallInteger('max_loans_process');
            $table->smallInteger('days_current_interest');
            $table->smallInteger('grace_period');
            $table->smallInteger('consecutive_manual_payment');
            $table->smallInteger('max_months_go_back');
            $table->smallInteger('min_percentage_paid');
            $table->smallInteger('min_remaining_installments');
            $table->timestamps();
            $table->integer('min_amount_fund_rotary')->nullable();
            $table->bigInteger('loan_procedure_id')->nullable()->index();
            $table->float('days_year_calculated')->nullable();
            $table->smallInteger('days_for_​import')->nullable()->comment('Días para la importación');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_global_parameters');
    }
};
