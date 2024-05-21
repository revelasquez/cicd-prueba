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
        Schema::table('contribution_types', function (Blueprint $table) {
            $table->foreign(['group_type_contribution_id'])->references(['id'])->on('group_type_contributions')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contribution_types', function (Blueprint $table) {
            $table->dropForeign('contribution_types_group_type_contribution_id_foreign');
        });
    }
};
