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
        Schema::create('quota_aid_legal_guardians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('city_identity_card_id')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mothers_last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('surname_husband')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cell_phone_number')->nullable();
            $table->string('number_authority')->nullable();
            $table->string('notary_of_public_faith')->nullable();
            $table->string('notary')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->date('date_authority')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quota_aid_legal_guardians');
    }
};
