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
        Schema::table('addressables', function (Blueprint $table) {
            $table->foreign(['address_id'])->references(['id'])->on('addresses')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addressables', function (Blueprint $table) {
            $table->dropForeign('addressables_address_id_foreign');
        });
    }
};
