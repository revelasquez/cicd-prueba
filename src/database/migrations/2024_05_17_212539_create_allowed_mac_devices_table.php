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
        Schema::create('allowed_mac_devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_name')->unique()->comment('nombre del dispositivo');
            $table->string('password')->comment('contraseña del dispositivo');
            $table->string('api_token')->nullable()->unique()->comment('token de acceso');
            $table->string('mac_address')->unique()->comment('direccion mac');
            $table->boolean('is_enable')->default(false)->comment('Estado del dispositivo');
            $table->string('Description')->comment('Descripcion del dispositivo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allowed_mac_devices');
    }
};
