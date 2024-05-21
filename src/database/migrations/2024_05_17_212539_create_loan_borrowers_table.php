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
        Schema::create('loan_borrowers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('loan_id')->index();
            $table->bigInteger('degree_id')->nullable()->index();
            $table->bigInteger('unit_id')->nullable()->index();
            $table->bigInteger('category_id')->nullable()->index();
            $table->string('type_affiliate')->nullable();
            $table->string('unit_police_description')->nullable();
            $table->bigInteger('affiliate_state_id')->index();
            $table->string('identity_card')->nullable();
            $table->bigInteger('city_identity_card_id')->nullable()->index();
            $table->bigInteger('city_birth_id')->nullable()->index();
            $table->string('registration')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mothers_last_name')->nullable();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('surname_husband')->nullable();
            $table->enum('gender', ['F', 'M']);
            $table->string('civil_status')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cell_phone_number')->nullable();
            $table->bigInteger('address_id')->index();
            $table->bigInteger('pension_entity_id')->nullable()->index();
            $table->float('payment_percentage');
            $table->float('payable_liquid_calculated');
            $table->float('bonus_calculated');
            $table->float('quota_previous');
            $table->float('quota_treat');
            $table->float('indebtedness_calculated');
            $table->float('indebtedness_calculated_previous');
            $table->float('liquid_qualification_calculated');
            $table->json('contributionable_ids')->nullable();
            $table->enum('contributionable_type', ['contributions', 'aid_contributions', 'loan_contribution_adjusts'])->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_borrowers');
    }
};
