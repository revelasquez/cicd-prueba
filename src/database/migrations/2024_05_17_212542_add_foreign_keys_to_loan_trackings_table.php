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
        Schema::table('loan_trackings', function (Blueprint $table) {
            $table->foreign(['loan_id'])->references(['id'])->on('loans')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['loan_tracking_type_id'])->references(['id'])->on('loan_tracking_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_trackings', function (Blueprint $table) {
            $table->dropForeign('loan_trackings_loan_id_foreign');
            $table->dropForeign('loan_trackings_loan_tracking_type_id_foreign');
            $table->dropForeign('loan_trackings_user_id_foreign');
        });
    }
};
