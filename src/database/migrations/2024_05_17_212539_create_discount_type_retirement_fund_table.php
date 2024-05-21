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
        Schema::create('discount_type_retirement_fund', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('discount_type_id')->nullable();
            $table->bigInteger('retirement_fund_id');
            $table->decimal('amount', 13)->nullable();
            $table->timestamps();
            $table->date('date')->nullable();
            $table->string('code')->nullable();
            $table->string('note_code')->nullable();
            $table->date('note_code_date')->nullable();

            $table->unique(['discount_type_id', 'retirement_fund_id'], 'discount_type_retirement_fund_discount_type_id_retirement_fund_');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_type_retirement_fund');
    }
};
