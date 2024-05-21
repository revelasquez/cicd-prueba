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
        Schema::create('ret_fun_advisor_beneficiary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ret_fun_beneficiary_id');
            $table->bigInteger('ret_fun_advisor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ret_fun_advisor_beneficiary');
    }
};
