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
        Schema::table('loans', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['city_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['destiny_id'])->references(['id'])->on('loan_destinies')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['financial_entity_id'])->references(['id'])->on('financial_entities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['interest_id'])->references(['id'])->on('loan_interests')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['loan_procedure_id'])->references(['id'])->on('loan_procedures')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['payment_type_id'])->references(['id'])->on('payment_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_modality_id'])->references(['id'])->on('procedure_modalities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['property_id'])->references(['id'])->on('loan_properties')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['role_id'])->references(['id'])->on('roles')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['state_id'])->references(['id'])->on('loan_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loans', function (Blueprint $table) {
            $table->dropForeign('loans_affiliate_id_foreign');
            $table->dropForeign('loans_city_id_foreign');
            $table->dropForeign('loans_destiny_id_foreign');
            $table->dropForeign('loans_financial_entity_id_foreign');
            $table->dropForeign('loans_interest_id_foreign');
            $table->dropForeign('loans_loan_procedure_id_foreign');
            $table->dropForeign('loans_payment_type_id_foreign');
            $table->dropForeign('loans_procedure_modality_id_foreign');
            $table->dropForeign('loans_property_id_foreign');
            $table->dropForeign('loans_role_id_foreign');
            $table->dropForeign('loans_state_id_foreign');
            $table->dropForeign('loans_user_id_foreign');
        });
    }
};
