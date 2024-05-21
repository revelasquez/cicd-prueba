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
        Schema::table('ret_fun_submitted_documents', function (Blueprint $table) {
            $table->foreign(['procedure_requirement_id'])->references(['id'])->on('procedure_requirements')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['retirement_fund_id'])->references(['id'])->on('retirement_funds')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ret_fun_submitted_documents', function (Blueprint $table) {
            $table->dropForeign('ret_fun_submitted_documents_procedure_requirement_id_foreign');
            $table->dropForeign('ret_fun_submitted_documents_retirement_fund_id_foreign');
        });
    }
};
