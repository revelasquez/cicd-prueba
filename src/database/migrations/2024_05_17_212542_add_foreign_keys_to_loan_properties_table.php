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
        Schema::table('loan_properties', function (Blueprint $table) {
            $table->foreign(['real_city_id'])->references(['id'])->on('cities')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_properties', function (Blueprint $table) {
            $table->dropForeign('loan_properties_real_city_id_foreign');
        });
    }
};
