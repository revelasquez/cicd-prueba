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
        Schema::table('contributions', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('restrict');
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['contribution_type_id'])->references(['id'])->on('contribution_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['contribution_type_mortuary_id'])->references(['id'])->on('contribution_type_quota_aids')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['degree_id'])->references(['id'])->on('degrees')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['unit_id'])->references(['id'])->on('units')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contributions', function (Blueprint $table) {
            $table->dropForeign('contributions_affiliate_id_foreign');
            $table->dropForeign('contributions_category_id_foreign');
            $table->dropForeign('contributions_contribution_type_id_foreign');
            $table->dropForeign('contributions_contribution_type_mortuary_id_foreign');
            $table->dropForeign('contributions_degree_id_foreign');
            $table->dropForeign('contributions_unit_id_foreign');
            $table->dropForeign('contributions_user_id_foreign');
        });
    }
};
