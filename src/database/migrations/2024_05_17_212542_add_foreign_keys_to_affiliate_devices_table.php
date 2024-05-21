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
        Schema::table('affiliate_devices', function (Blueprint $table) {
            $table->foreign(['eco_com_procedure_id'])->references(['id'])->on('eco_com_procedures')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['affiliate_token_id'], 'affiliate_token_id')->references(['id'])->on('affiliate_tokens')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('affiliate_devices', function (Blueprint $table) {
            $table->dropForeign('affiliate_devices_eco_com_procedure_id_foreign');
            $table->dropForeign('affiliate_token_id');
        });
    }
};
