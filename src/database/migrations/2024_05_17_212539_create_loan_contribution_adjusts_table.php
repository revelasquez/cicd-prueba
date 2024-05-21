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
        Schema::create('loan_contribution_adjusts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index();
            $table->bigInteger('loan_id')->nullable()->index();
            $table->bigInteger('affiliate_id')->index();
            $table->string('adjustable_type');
            $table->bigInteger('adjustable_id');
            $table->enum('type_affiliate', ['lender', 'guarantor', 'cosigner']);
            $table->float('amount')->default(0);
            $table->enum('type_adjust', ['adjust', 'liquid']);
            $table->date('period_date');
            $table->string('description')->nullable();
            $table->timestamps();

            $table->index(['adjustable_type', 'adjustable_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_contribution_adjusts');
    }
};
