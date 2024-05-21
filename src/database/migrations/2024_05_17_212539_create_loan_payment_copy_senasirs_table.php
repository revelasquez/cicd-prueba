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
        Schema::create('loan_payment_copy_senasirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('period_id')->index();
            $table->string('registration');
            $table->string('registration_dh')->nullable();
            $table->float('amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_payment_copy_senasirs');
    }
};
