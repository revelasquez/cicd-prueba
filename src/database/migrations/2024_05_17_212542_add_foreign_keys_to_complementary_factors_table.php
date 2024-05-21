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
        Schema::table('complementary_factors', function (Blueprint $table) {
            $table->foreign(['hierarchy_id'])->references(['id'])->on('hierarchies')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('complementary_factors', function (Blueprint $table) {
            $table->dropForeign('complementary_factors_hierarchy_id_foreign');
            $table->dropForeign('complementary_factors_user_id_foreign');
        });
    }
};
