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
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->nullable()->unique('uq_loan');
            $table->bigInteger('procedure_modality_id')->index();
            $table->timestamp('disbursement_date')->nullable();
            $table->string('num_accounting_voucher')->nullable();
            $table->bigInteger('parent_loan_id')->nullable();
            $table->enum('parent_reason', ['REFINANCIAMIENTO', 'REPROGRAMACIÓN'])->nullable();
            $table->date('request_date');
            $table->float('amount_requested');
            $table->bigInteger('city_id')->index();
            $table->bigInteger('interest_id')->index();
            $table->bigInteger('state_id')->index();
            $table->float('amount_approved')->nullable();
            $table->float('indebtedness_calculated');
            $table->float('indebtedness_calculated_previous');
            $table->float('liquid_qualification_calculated');
            $table->smallInteger('loan_term');
            $table->float('refinancing_balance')->default(0);
            $table->boolean('guarantor_amortizing')->default(false);
            $table->bigInteger('payment_type_id')->index();
            $table->bigInteger('number_payment_type')->nullable();
            $table->bigInteger('destiny_id')->index();
            $table->bigInteger('financial_entity_id')->nullable()->index();
            $table->bigInteger('role_id')->index();
            $table->bigInteger('property_id')->nullable()->index();
            $table->boolean('validated')->default(true);
            $table->bigInteger('user_id')->nullable()->index();
            $table->timestamp('delivery_contract_date')->nullable();
            $table->timestamp('return_contract_date')->nullable();
            $table->timestamp('regional_delivery_contract_date')->nullable();
            $table->timestamp('regional_return_contract_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('payment_plan_compliance')->default(true);
            $table->bigInteger('affiliate_id')->nullable()->index();
            $table->uuid('uuid')->nullable()->unique()->comment('Identificador Unico Universal');
            $table->bigInteger('loan_procedure_id')->nullable()->index();
            $table->boolean('authorize_refinancing')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
