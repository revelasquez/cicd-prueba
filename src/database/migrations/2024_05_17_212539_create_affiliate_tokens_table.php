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
        Schema::create('affiliate_tokens', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id affiliate tokens');
            $table->bigInteger('affiliate_id');
            $table->string('api_token')->nullable()->unique()->comment('token para la aplicacion');
            $table->string('firebase_token')->nullable()->comment('token generado en firebase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_tokens');
    }
};
