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
        Schema::create('contribution_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->date('month_year')->unique();
            $table->decimal('retirement_fund', 13, 3);
            $table->decimal('mortuary_quota', 13, 3)->nullable();
            $table->decimal('mortuary_aid', 13, 3)->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->decimal('fcsspn', 13, 3)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_rates');
    }
};
