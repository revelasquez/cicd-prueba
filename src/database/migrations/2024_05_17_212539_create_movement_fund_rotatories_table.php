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
        Schema::create('movement_fund_rotatories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('loan_id')->nullable();
            $table->timestamp('date_check_delivery')->nullable();
            $table->string('description');
            $table->float('entry_amount')->default(0);
            $table->float('output_amount')->default(0);
            $table->float('balance');
            $table->string('movement_concept_code')->unique();
            $table->bigInteger('movement_concept_id')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('role_id');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['movement_concept_code', 'date_check_delivery'], 'movement_fund_rotatories_movement_concept_code_date_check_deliv');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movement_fund_rotatories');
    }
};
