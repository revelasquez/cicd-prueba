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
        Schema::table('aid_contributions', function (Blueprint $table) {
            $table->foreign(['affiliate_id'])->references(['id'])->on('affiliates')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aid_contributions', function (Blueprint $table) {
            $table->dropForeign('aid_contributions_affiliate_id_foreign');
            $table->dropForeign('aid_contributions_user_id_foreign');
        });
    }
};
