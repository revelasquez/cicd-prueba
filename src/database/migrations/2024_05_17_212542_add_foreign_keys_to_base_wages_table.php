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
        Schema::table('base_wages', function (Blueprint $table) {
            $table->foreign(['degree_id'])->references(['id'])->on('degrees')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('base_wages', function (Blueprint $table) {
            $table->dropForeign('base_wages_degree_id_foreign');
            $table->dropForeign('base_wages_user_id_foreign');
        });
    }
};
