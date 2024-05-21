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
        Schema::create('loan_payment_group_commands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('affiliate_id')->index();
            $table->bigInteger('period_id')->index();
            $table->string('identity_card');
            $table->float('amount');
            $table->float('amount_balance');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['affiliate_id', 'period_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_payment_group_commands');
    }
};
