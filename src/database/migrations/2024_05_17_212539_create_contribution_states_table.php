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
        Schema::create('contribution_states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('Estados de la contribución pagado,en proceso y devuelto');
            $table->string('description')->comment('Descripcion del estado de la contribución');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_states');
    }
};
