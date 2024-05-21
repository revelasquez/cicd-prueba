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
        Schema::table('eco_com_records', function (Blueprint $table) {
            $table->foreign(['economic_complement_id'])->references(['id'])->on('economic_complements')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eco_com_records', function (Blueprint $table) {
            $table->dropForeign('eco_com_records_economic_complement_id_foreign');
            $table->dropForeign('eco_com_records_user_id_foreign');
        });
    }
};
