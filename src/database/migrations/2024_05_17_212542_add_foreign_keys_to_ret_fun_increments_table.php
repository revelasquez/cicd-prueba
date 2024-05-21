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
        Schema::table('ret_fun_increments', function (Blueprint $table) {
            $table->foreign(['retirement_fund_id'])->references(['id'])->on('retirement_funds')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['role_id'])->references(['id'])->on('roles')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ret_fun_increments', function (Blueprint $table) {
            $table->dropForeign('ret_fun_increments_retirement_fund_id_foreign');
            $table->dropForeign('ret_fun_increments_role_id_foreign');
        });
    }
};
