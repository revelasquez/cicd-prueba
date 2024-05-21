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
        Schema::table('contribution_type_retirement_fund', function (Blueprint $table) {
            $table->foreign(['contribution_type_id'])->references(['id'])->on('contribution_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['retirement_fund_id'])->references(['id'])->on('retirement_funds')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contribution_type_retirement_fund', function (Blueprint $table) {
            $table->dropForeign('contribution_type_retirement_fund_contribution_type_id_foreign');
            $table->dropForeign('contribution_type_retirement_fund_retirement_fund_id_foreign');
            $table->dropForeign('contribution_type_retirement_fund_user_id_foreign');
        });
    }
};
