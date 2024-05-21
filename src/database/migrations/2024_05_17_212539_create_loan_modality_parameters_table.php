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
        Schema::create('loan_modality_parameters', function (Blueprint $table) {
            $table->bigInteger('procedure_modality_id')->index();
            $table->float('debt_index')->nullable();
            $table->smallInteger('quantity_ballots');
            $table->smallInteger('guarantors');
            $table->smallInteger('max_lenders');
            $table->float('min_guarantor_category')->nullable();
            $table->float('max_guarantor_category')->nullable();
            $table->float('min_lender_category')->nullable();
            $table->float('max_lender_category')->nullable();
            $table->integer('max_cosigner')->default(0);
            $table->boolean('personal_reference')->default(false);
            $table->integer('maximum_amount_modality')->nullable();
            $table->integer('minimum_amount_modality')->nullable();
            $table->smallInteger('maximum_term_modality')->nullable();
            $table->smallInteger('minimum_term_modality')->nullable();
            $table->boolean('print_contract_platform')->default(false);
            $table->boolean('print_receipt_fund_rotary')->default(false);
            $table->boolean('print_form_qualification_platform')->default(false);
            $table->bigInteger('loan_procedure_id')->nullable()->index();
            $table->float('max_approved_amount')->nullable();
            $table->float('guarantor_debt_index')->nullable();

            $table->unique(['procedure_modality_id', 'loan_procedure_id'], 'loan_modality_parameters_procedure_modality_id_loan_procedure_i');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_modality_parameters');
    }
};
