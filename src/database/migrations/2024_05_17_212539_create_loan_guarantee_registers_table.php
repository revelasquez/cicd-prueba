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
        Schema::create('loan_guarantee_registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index();
            $table->bigInteger('role_id')->index();
            $table->bigInteger('loan_id')->nullable()->index();
            $table->bigInteger('affiliate_id')->index();
            $table->string('guarantable_type');
            $table->bigInteger('guarantable_id');
            $table->float('amount')->default(0);
            $table->date('period_date');
            $table->enum('database_name', ['PVT', 'SISMU'])->nullable();
            $table->string('loan_code_guarantee')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['guarantable_type', 'guarantable_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_guarantee_registers');
    }
};
