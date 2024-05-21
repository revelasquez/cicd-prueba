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
        Schema::table('economic_complements', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('restrict');
            $table->foreign(['base_wage_id'])->references(['id'])->on('base_wages')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['city_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['complementary_factor_id'])->references(['id'])->on('complementary_factors')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['degree_id'])->references(['id'])->on('degrees')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['eco_com_kind_rent_id'])->references(['id'])->on('eco_com_kind_rent')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['eco_com_modality_id'])->references(['id'])->on('eco_com_modalities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['eco_com_procedure_id'])->references(['id'])->on('eco_com_procedures')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['eco_com_reception_type_id'])->references(['id'])->on('eco_com_reception_types')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['eco_com_state_id'])->references(['id'])->on('eco_com_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['wf_current_state_id'])->references(['id'])->on('wf_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['workflow_id'])->references(['id'])->on('workflows')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('economic_complements', function (Blueprint $table) {
            $table->dropForeign('economic_complements_affiliate_id_foreign');
            $table->dropForeign('economic_complements_base_wage_id_foreign');
            $table->dropForeign('economic_complements_category_id_foreign');
            $table->dropForeign('economic_complements_city_id_foreign');
            $table->dropForeign('economic_complements_complementary_factor_id_foreign');
            $table->dropForeign('economic_complements_degree_id_foreign');
            $table->dropForeign('economic_complements_eco_com_kind_rent_id_foreign');
            $table->dropForeign('economic_complements_eco_com_modality_id_foreign');
            $table->dropForeign('economic_complements_eco_com_procedure_id_foreign');
            $table->dropForeign('economic_complements_eco_com_reception_type_id_foreign');
            $table->dropForeign('economic_complements_eco_com_state_id_foreign');
            $table->dropForeign('economic_complements_user_id_foreign');
            $table->dropForeign('economic_complements_wf_current_state_id_foreign');
            $table->dropForeign('economic_complements_workflow_id_foreign');
        });
    }
};
