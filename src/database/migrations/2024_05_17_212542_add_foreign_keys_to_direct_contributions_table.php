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
        Schema::table('direct_contributions', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['city_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_modality_id'])->references(['id'])->on('procedure_modalities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_state_id'])->references(['id'])->on('procedure_states')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('direct_contributions', function (Blueprint $table) {
            $table->dropForeign('direct_contributions_affiliate_id_foreign');
            $table->dropForeign('direct_contributions_city_id_foreign');
            $table->dropForeign('direct_contributions_procedure_modality_id_foreign');
            $table->dropForeign('direct_contributions_procedure_state_id_foreign');
            $table->dropForeign('direct_contributions_user_id_foreign');
        });
    }
};
