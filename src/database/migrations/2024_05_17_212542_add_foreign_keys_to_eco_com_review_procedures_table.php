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
        Schema::table('eco_com_review_procedures', function (Blueprint $table) {
            $table->foreign(['economic_complement_id'])->references(['id'])->on('economic_complements')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['review_procedure_id'])->references(['id'])->on('review_procedures')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eco_com_review_procedures', function (Blueprint $table) {
            $table->dropForeign('eco_com_review_procedures_economic_complement_id_foreign');
            $table->dropForeign('eco_com_review_procedures_review_procedure_id_foreign');
            $table->dropForeign('eco_com_review_procedures_user_id_foreign');
        });
    }
};
