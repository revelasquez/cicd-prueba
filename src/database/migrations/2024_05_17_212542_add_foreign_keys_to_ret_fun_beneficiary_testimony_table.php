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
        Schema::table('ret_fun_beneficiary_testimony', function (Blueprint $table) {
            $table->foreign(['ret_fun_beneficiary_id'])->references(['id'])->on('ret_fun_beneficiaries')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['testimony_id'])->references(['id'])->on('testimonies')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ret_fun_beneficiary_testimony', function (Blueprint $table) {
            $table->dropForeign('ret_fun_beneficiary_testimony_ret_fun_beneficiary_id_foreign');
            $table->dropForeign('ret_fun_beneficiary_testimony_testimony_id_foreign');
        });
    }
};
