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
        Schema::create('affiliate_devices', function (Blueprint $table) {
            $table->string('device_id')->nullable()->unique();
            $table->boolean('enrolled')->default(false);
            $table->json('liveness_actions')->nullable();
            $table->boolean('verified')->default(false);
            $table->bigInteger('eco_com_procedure_id')->nullable();
            $table->timestamps();
            $table->integer('affiliate_token_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_devices');
    }
};
