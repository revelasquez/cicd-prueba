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
        Schema::table('permissions', function (Blueprint $table) {
            $table->foreign(['action_id'])->references(['id'])->on('actions')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['operation_id'])->references(['id'])->on('operations')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropForeign('permissions_action_id_foreign');
            $table->dropForeign('permissions_operation_id_foreign');
        });
    }
};
