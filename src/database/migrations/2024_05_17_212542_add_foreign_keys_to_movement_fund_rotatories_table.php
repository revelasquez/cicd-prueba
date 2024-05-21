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
        Schema::table('movement_fund_rotatories', function (Blueprint $table) {
            $table->foreign(['movement_concept_id'])->references(['id'])->on('movement_concepts')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['role_id'])->references(['id'])->on('roles')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movement_fund_rotatories', function (Blueprint $table) {
            $table->dropForeign('movement_fund_rotatories_movement_concept_id_foreign');
            $table->dropForeign('movement_fund_rotatories_role_id_foreign');
            $table->dropForeign('movement_fund_rotatories_user_id_foreign');
        });
    }
};
