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
        Schema::table('payroll_transcripts', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['degree_id'])->references(['id'])->on('degrees')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['hierarchy_id'])->references(['id'])->on('hierarchies')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payroll_transcripts', function (Blueprint $table) {
            $table->dropForeign('payroll_transcripts_affiliate_id_foreign');
            $table->dropForeign('payroll_transcripts_category_id_foreign');
            $table->dropForeign('payroll_transcripts_degree_id_foreign');
            $table->dropForeign('payroll_transcripts_hierarchy_id_foreign');
        });
    }
};
