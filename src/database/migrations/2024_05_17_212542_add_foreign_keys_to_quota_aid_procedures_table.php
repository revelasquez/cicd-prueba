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
        Schema::table('quota_aid_procedures', function (Blueprint $table) {
            $table->foreign(['hierarchy_id'])->references(['id'])->on('hierarchies')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['procedure_modality_id'])->references(['id'])->on('procedure_modalities')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quota_aid_procedures', function (Blueprint $table) {
            $table->dropForeign('quota_aid_procedures_hierarchy_id_foreign');
            $table->dropForeign('quota_aid_procedures_procedure_modality_id_foreign');
        });
    }
};
