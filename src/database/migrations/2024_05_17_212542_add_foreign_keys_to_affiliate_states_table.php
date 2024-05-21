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
        Schema::table('affiliate_states', function (Blueprint $table) {
            $table->foreign(['affiliate_state_type_id'])->references(['id'])->on('affiliate_state_types')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('affiliate_states', function (Blueprint $table) {
            $table->dropForeign('affiliate_states_affiliate_state_type_id_foreign');
        });
    }
};
