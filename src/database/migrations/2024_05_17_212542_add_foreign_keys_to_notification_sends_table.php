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
        Schema::table('notification_sends', function (Blueprint $table) {
            $table->foreign(['carrier_id'])->references(['id'])->on('notification_carriers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['notification_type_id'])->references(['id'])->on('notification_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['sender_number'])->references(['id'])->on('notification_numbers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notification_sends', function (Blueprint $table) {
            $table->dropForeign('notification_sends_carrier_id_foreign');
            $table->dropForeign('notification_sends_notification_type_id_foreign');
            $table->dropForeign('notification_sends_sender_number_foreign');
            $table->dropForeign('notification_sends_user_id_foreign');
        });
    }
};
