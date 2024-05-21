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
        Schema::table('personal_references', function (Blueprint $table) {
            $table->foreign(['city_birth_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['city_identity_card_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_references', function (Blueprint $table) {
            $table->dropForeign('personal_references_city_birth_id_foreign');
            $table->dropForeign('personal_references_city_identity_card_id_foreign');
        });
    }
};
