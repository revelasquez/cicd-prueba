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
        Schema::table('loan_guarantors', function (Blueprint $table) {
            $table->foreign(['address_id'])->references(['id'])->on('addresses')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['affiliate_state_id'])->references(['id'])->on('affiliate_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['city_birth_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['city_identity_card_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['degree_id'])->references(['id'])->on('degrees')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['loan_id'])->references(['id'])->on('loans')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['pension_entity_id'])->references(['id'])->on('pension_entities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['unit_id'])->references(['id'])->on('units')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_guarantors', function (Blueprint $table) {
            $table->dropForeign('loan_guarantors_address_id_foreign');
            $table->dropForeign('loan_guarantors_affiliate_id_foreign');
            $table->dropForeign('loan_guarantors_affiliate_state_id_foreign');
            $table->dropForeign('loan_guarantors_category_id_foreign');
            $table->dropForeign('loan_guarantors_city_birth_id_foreign');
            $table->dropForeign('loan_guarantors_city_identity_card_id_foreign');
            $table->dropForeign('loan_guarantors_degree_id_foreign');
            $table->dropForeign('loan_guarantors_loan_id_foreign');
            $table->dropForeign('loan_guarantors_pension_entity_id_foreign');
            $table->dropForeign('loan_guarantors_unit_id_foreign');
        });
    }
};
