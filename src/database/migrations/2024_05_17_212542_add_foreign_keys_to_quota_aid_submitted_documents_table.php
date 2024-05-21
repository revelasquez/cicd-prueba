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
        Schema::table('quota_aid_submitted_documents', function (Blueprint $table) {
            $table->foreign(['procedure_requirement_id'])->references(['id'])->on('procedure_requirements')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['quota_aid_mortuary_id'])->references(['id'])->on('quota_aid_mortuaries')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quota_aid_submitted_documents', function (Blueprint $table) {
            $table->dropForeign('quota_aid_submitted_documents_procedure_requirement_id_foreign');
            $table->dropForeign('quota_aid_submitted_documents_quota_aid_mortuary_id_foreign');
        });
    }
};
