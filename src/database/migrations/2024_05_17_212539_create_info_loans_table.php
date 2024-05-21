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
        Schema::create('info_loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->bigInteger('affiliate_id');
            $table->bigInteger('affiliate_guarantor_id');
            $table->bigInteger('retirement_fund_id');
            $table->string('code');
            $table->date('date');
            $table->decimal('amount');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('quota_aid_mortuary_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_loans');
    }
};
