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
        Schema::create('dcto_diciembre2', function (Blueprint $table) {
            $table->integer('Nro')->nullable();
            $table->string('C.I.', 50)->nullable();
            $table->string('AP.PATERNO', 50)->nullable();
            $table->string('AP.MATERNO', 50)->nullable();
            $table->string('NOMBRE1', 50)->nullable();
            $table->string('NOMBRE2', 50)->nullable();
            $table->float('TOTAL 
DEUDA')->nullable();
            $table->string('CELULAR', 50)->nullable();
            $table->string('SEGUIMIENTO', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcto_diciembre2');
    }
};
