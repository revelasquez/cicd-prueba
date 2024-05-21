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
        Schema::create('dcto_diciembre', function (Blueprint $table) {
            $table->integer('Nro')->nullable();
            $table->string('Prestamo', 50)->nullable();
            $table->string('CI', 50)->nullable();
            $table->string('Paterno', 50)->nullable();
            $table->string('Materno', 50)->nullable();
            $table->string('primer_nombre', 50)->nullable();
            $table->string('segundo_nombre', 50)->nullable();
            $table->decimal('descuento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcto_diciembre');
    }
};
