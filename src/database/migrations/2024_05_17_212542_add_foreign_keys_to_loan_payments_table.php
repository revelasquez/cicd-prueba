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
        Schema::table('loan_payments', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['categorie_id'])->references(['id'])->on('loan_payment_categories')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['loan_id'])->references(['id'])->on('loans')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['procedure_modality_id'])->references(['id'])->on('procedure_modalities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['role_id'])->references(['id'])->on('roles')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['state_id'])->references(['id'])->on('loan_payment_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_payments', function (Blueprint $table) {
            $table->dropForeign('loan_payments_affiliate_id_foreign');
            $table->dropForeign('loan_payments_categorie_id_foreign');
            $table->dropForeign('loan_payments_loan_id_foreign');
            $table->dropForeign('loan_payments_procedure_modality_id_foreign');
            $table->dropForeign('loan_payments_role_id_foreign');
            $table->dropForeign('loan_payments_state_id_foreign');
            $table->dropForeign('loan_payments_user_id_foreign');
        });
    }
};
