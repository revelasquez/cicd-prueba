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
        Schema::table('procedure_modalities', function (Blueprint $table) {
            $table->foreign(['procedure_type_id'])->references(['id'])->on('procedure_types')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('procedure_modalities', function (Blueprint $table) {
            $table->dropForeign('procedure_modalities_procedure_type_id_foreign');
        });
    }
};
