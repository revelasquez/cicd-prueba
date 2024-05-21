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
        Schema::table('devolutions', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['observation_type_id'])->references(['id'])->on('observation_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['start_eco_com_procedure_id'])->references(['id'])->on('eco_com_procedures')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('devolutions', function (Blueprint $table) {
            $table->dropForeign('devolutions_affiliate_id_foreign');
            $table->dropForeign('devolutions_observation_type_id_foreign');
            $table->dropForeign('devolutions_start_eco_com_procedure_id_foreign');
        });
    }
};
