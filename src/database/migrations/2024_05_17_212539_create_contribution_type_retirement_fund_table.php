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
        Schema::create('contribution_type_retirement_fund', function (Blueprint $table) {
            $table->bigInteger('retirement_fund_id');
            $table->bigInteger('contribution_type_id');
            $table->bigInteger('user_id');
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_type_retirement_fund');
    }
};
