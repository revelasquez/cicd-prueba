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
        Schema::create('loan_plan_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('loan_id')->index();
            $table->bigInteger('user_id')->index();
            $table->date('disbursement_date');
            $table->smallInteger('quota_number');
            $table->date('estimated_date');
            $table->smallInteger('days');
            $table->float('capital')->default(0);
            $table->float('interest')->default(0);
            $table->float('total_amount')->default(0);
            $table->float('balance')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_plan_payments');
    }
};
