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
        Schema::table('ret_fun_records', function (Blueprint $table) {
            $table->foreign(['ret_fun_id'])->references(['id'])->on('retirement_funds')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ret_fun_records', function (Blueprint $table) {
            $table->dropForeign('ret_fun_records_ret_fun_id_foreign');
            $table->dropForeign('ret_fun_records_user_id_foreign');
        });
    }
};
