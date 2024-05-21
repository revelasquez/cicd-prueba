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
        Schema::create('devolutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('affiliate_id')->nullable();
            $table->bigInteger('observation_type_id')->nullable();
            $table->bigInteger('start_eco_com_procedure_id')->nullable();
            $table->decimal('total', 13)->nullable();
            $table->decimal('balance', 13)->nullable();
            $table->string('deposit_number')->nullable();
            $table->decimal('payment_amount', 13)->nullable();
            $table->date('payment_date')->nullable();
            $table->decimal('percentage', 13)->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();
            $table->boolean('has_payment_commitment')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devolutions');
    }
};
