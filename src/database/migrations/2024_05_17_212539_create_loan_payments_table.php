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
        Schema::create('loan_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('loan_id')->index();
            $table->string('code')->nullable()->unique('uq_payment');
            $table->bigInteger('procedure_modality_id')->index();
            $table->date('estimated_date');
            $table->smallInteger('quota_number');
            $table->float('estimated_quota');
            $table->timestamp('loan_payment_date')->nullable();
            $table->float('penal_remaining')->default(0);
            $table->float('penal_payment')->default(0);
            $table->float('interest_remaining')->default(0);
            $table->float('interest_payment')->default(0);
            $table->float('capital_payment')->default(0);
            $table->float('interest_accumulated')->default(0);
            $table->float('penal_accumulated')->default(0);
            $table->float('previous_balance')->default(0);
            $table->date('previous_payment_date');
            $table->bigInteger('state_id')->index();
            $table->text('voucher')->nullable();
            $table->text('initial_affiliate')->nullable();
            $table->enum('paid_by', ['T', 'G']);
            $table->enum('state_affiliate', ['ACTIVO', 'PASIVO'])->nullable();
            $table->bigInteger('role_id')->index();
            $table->bigInteger('affiliate_id')->index();
            $table->bigInteger('categorie_id')->index();
            $table->boolean('validated')->default(false);
            $table->text('description')->nullable();
            $table->bigInteger('user_id')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_payments');
    }
};
