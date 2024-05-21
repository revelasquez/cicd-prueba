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
        Schema::table('role_sequences', function (Blueprint $table) {
            $table->foreign(['next_role_id'])->references(['id'])->on('roles')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['procedure_type_id'])->references(['id'])->on('procedure_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['role_id'])->references(['id'])->on('roles')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('role_sequences', function (Blueprint $table) {
            $table->dropForeign('role_sequences_next_role_id_foreign');
            $table->dropForeign('role_sequences_procedure_type_id_foreign');
            $table->dropForeign('role_sequences_role_id_foreign');
        });
    }
};
