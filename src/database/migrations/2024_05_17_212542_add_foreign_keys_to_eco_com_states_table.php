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
        Schema::table('eco_com_states', function (Blueprint $table) {
            $table->foreign(['eco_com_state_type_id'])->references(['id'])->on('eco_com_state_types')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eco_com_states', function (Blueprint $table) {
            $table->dropForeign('eco_com_states_eco_com_state_type_id_foreign');
        });
    }
};
