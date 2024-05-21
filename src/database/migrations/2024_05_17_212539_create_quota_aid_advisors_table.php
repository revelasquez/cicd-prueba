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
        Schema::create('quota_aid_advisors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('city_identity_card_id')->nullable();
            $table->bigInteger('kinship_id')->nullable();
            $table->string('identity_card');
            $table->string('last_name')->nullable();
            $table->string('mothers_last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('surname_husband')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['M', 'F']);
            $table->enum('type', ['Natural', 'Legal']);
            $table->string('name_court')->nullable();
            $table->string('resolution_number')->nullable();
            $table->date('resolution_date')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cell_phone_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quota_aid_advisors');
    }
};
