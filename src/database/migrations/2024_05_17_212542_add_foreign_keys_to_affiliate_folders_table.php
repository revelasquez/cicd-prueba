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
        Schema::table('affiliate_folders', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_modality_id'])->references(['id'])->on('procedure_modalities')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('affiliate_folders', function (Blueprint $table) {
            $table->dropForeign('affiliate_folders_affiliate_id_foreign');
            $table->dropForeign('affiliate_folders_procedure_modality_id_foreign');
        });
    }
};
