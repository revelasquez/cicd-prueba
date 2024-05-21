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
        Schema::table('import_records', function (Blueprint $table) {
            $table->foreign(['record_types_id'])->references(['id'])->on('record_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['role_id'])->references(['id'])->on('roles')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('import_records', function (Blueprint $table) {
            $table->dropForeign('import_records_record_types_id_foreign');
            $table->dropForeign('import_records_role_id_foreign');
            $table->dropForeign('import_records_user_id_foreign');
        });
    }
};
