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
        Schema::table('discount_type_economic_complement', function (Blueprint $table) {
            $table->foreign(['discount_type_id'])->references(['id'])->on('discount_types')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['economic_complement_id'], 'discount_type_economic_complement_economic_complement_id_foreig')->references(['id'])->on('economic_complements')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('discount_type_economic_complement', function (Blueprint $table) {
            $table->dropForeign('discount_type_economic_complement_discount_type_id_foreign');
            $table->dropForeign('discount_type_economic_complement_economic_complement_id_foreig');
        });
    }
};
