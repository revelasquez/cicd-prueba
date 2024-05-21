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
        Schema::create('import_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->comment('Id del usuario');
            $table->string('import_recordable_type');
            $table->bigInteger('import_recordable_id');
            $table->bigInteger('record_types_id');
            $table->bigInteger('role_id');
            $table->string('action')->comment('Descripción de la acción');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['import_recordable_type', 'import_recordable_id'], 'import_records_import_recordable_type_import_recordable_id_inde');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('import_records');
    }
};
