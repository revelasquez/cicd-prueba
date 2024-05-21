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
        Schema::create('ret_fun_submitted_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('retirement_fund_id');
            $table->bigInteger('procedure_requirement_id');
            $table->boolean('is_valid')->default(false);
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['retirement_fund_id', 'procedure_requirement_id'], 'ret_fun_submitted_documents_retirement_fund_id_procedure_requir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ret_fun_submitted_documents');
    }
};
