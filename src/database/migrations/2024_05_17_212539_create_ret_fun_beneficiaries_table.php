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
        Schema::create('ret_fun_beneficiaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('retirement_fund_id');
            $table->bigInteger('city_identity_card_id')->nullable();
            $table->bigInteger('kinship_id')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mothers_last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('surname_husband')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->enum('type', ['S', 'N']);
            $table->enum('civil_status', ['C', 'S', 'V', 'D'])->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cell_phone_number')->nullable();
            $table->decimal('percentage', 13)->nullable();
            $table->decimal('amount_ret_fun', 13)->nullable();
            $table->decimal('amount_availability', 13)->nullable();
            $table->decimal('amount_total', 13)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('state')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ret_fun_beneficiaries');
    }
};
