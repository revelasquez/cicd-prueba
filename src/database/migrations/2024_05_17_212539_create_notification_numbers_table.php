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
        Schema::create('notification_numbers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number')->comment('Número telefónico');
            $table->string('currier')->comment('Línea telefónica');
            $table->boolean('state_active')->default(true)->comment('Estado activo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_numbers');
    }
};
