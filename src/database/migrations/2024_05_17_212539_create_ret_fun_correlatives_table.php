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
        Schema::create('ret_fun_correlatives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('wf_state_id');
            $table->bigInteger('retirement_fund_id');
            $table->string('code');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('user_id')->nullable();
            $table->date('date')->nullable();
            $table->text('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ret_fun_correlatives');
    }
};
