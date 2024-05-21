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
        Schema::create('affiliate_users', function (Blueprint $table) {
            $table->bigInteger('affiliate_token_id')->unique()->comment('id affiliate tokens');
            $table->string('username')->unique('affiliate_users_username')->comment('Usuario');
            $table->string('password')->comment('Contraseña');
            $table->enum('access_status', ['Activo', 'Inactivo', 'Pendiente'])->default('Pendiente')->comment('Estado del acceso');
            $table->timestamps();
            $table->string('password_update_code')->nullable()->comment('Codigo para cambiar la contraseña del usuario');
            $table->integer('role_id')->comment('Role del Usuario que genera las credenciales');
            $table->integer('user_id')->comment('usuario que genera las credenciales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_users');
    }
};
