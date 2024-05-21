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
        Schema::create('loan_payment_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('type_register', ['SISTEMA', 'USUARIO'])->nullable();
            $table->string('shortened')->nullable();
            $table->boolean('is_valid')->default(true);
            $table->string('description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['name', 'type_register']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_payment_categories');
    }
};
