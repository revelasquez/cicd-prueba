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
        Schema::table('dues', function (Blueprint $table) {
            $table->foreign(['devolution_id'])->references(['id'])->on('devolutions')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['eco_com_procedure_id'])->references(['id'])->on('eco_com_procedures')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dues', function (Blueprint $table) {
            $table->dropForeign('dues_devolution_id_foreign');
            $table->dropForeign('dues_eco_com_procedure_id_foreign');
        });
    }
};
