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
        Schema::create('economic_complements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('affiliate_id');
            $table->bigInteger('eco_com_modality_id');
            $table->bigInteger('eco_com_state_id')->nullable();
            $table->bigInteger('eco_com_procedure_id');
            $table->bigInteger('workflow_id');
            $table->bigInteger('wf_current_state_id');
            $table->bigInteger('city_id');
            $table->bigInteger('category_id');
            $table->bigInteger('base_wage_id')->nullable();
            $table->bigInteger('complementary_factor_id')->nullable();
            $table->string('code')->unique();
            $table->date('reception_date')->nullable();
            $table->date('payment_date')->nullable();
            $table->string('payment_number')->nullable();
            $table->text('comment')->nullable();
            $table->decimal('sub_total_rent', 13)->nullable();
            $table->decimal('dignity_pension', 13)->nullable();
            $table->decimal('total_rent', 13)->nullable();
            $table->decimal('total_rent_calc', 13)->nullable();
            $table->decimal('salary_reference', 13)->nullable();
            $table->decimal('seniority', 13)->nullable();
            $table->decimal('salary_quotable', 13)->nullable();
            $table->decimal('difference', 13)->nullable();
            $table->decimal('total_amount_semester', 13)->nullable();
            $table->decimal('complementary_factor', 13)->nullable();
            $table->decimal('reimbursement', 13)->nullable();
            $table->decimal('total', 13)->nullable();
            $table->decimal('aps_total_cc', 13)->nullable();
            $table->decimal('aps_total_fsa', 13)->nullable();
            $table->decimal('aps_total_fs', 13)->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();
            $table->decimal('aps_disability', 13)->nullable();
            $table->enum('rent_type', ['Automatico', 'Manual', 'NoDefinido'])->default('NoDefinido');
            $table->decimal('amortization', 13)->nullable();
            $table->bigInteger('degree_id')->nullable();
            $table->text('bank_agency')->nullable();
            $table->date('recalification_date')->nullable();
            $table->json('old_eco_com')->nullable();
            $table->decimal('total_repay', 13)->nullable();
            $table->date('aprobation_date')->nullable();
            $table->string('number_accounting')->nullable();
            $table->string('number_budget')->nullable();
            $table->string('number_check')->nullable();
            $table->boolean('is_paid')->default(false);
            $table->bigInteger('month_id')->nullable();
            $table->bigInteger('eco_com_kind_rent_id')->nullable();
            $table->boolean('inbox_state')->default(false);
            $table->bigInteger('eco_com_reception_type_id')->nullable();
            $table->decimal('aps_total_death', 13)->nullable();
            $table->integer('months_of_payment')->nullable();
            $table->date('procedure_date')->nullable();
            $table->uuid('uuid')->nullable()->unique();

            $table->unique(['affiliate_id', 'eco_com_procedure_id'], 'economic_complements_affiliate_id_eco_com_procedure_id_delete_a');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('economic_complements');
    }
};
