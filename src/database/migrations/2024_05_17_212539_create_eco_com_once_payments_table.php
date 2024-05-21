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
        Schema::create('eco_com_once_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('economic_complement_id');
            $table->enum('type', ['V', 'H'])->default('V');
            $table->string('identity_card')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mothers_last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('surname_husband')->nullable();
            $table->date('birth_date')->nullable();
            $table->bigInteger('nua')->nullable();
            $table->enum('gender', ['M', 'F'])->default('M');
            $table->enum('civil_status', ['C', 'S', 'V', 'D'])->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cell_phone_number')->nullable();
            $table->date('date_death')->nullable();
            $table->string('reason_death')->nullable();
            $table->string('death_certificate_number')->nullable();
            $table->bigInteger('city_birth_id')->nullable();
            $table->date('due_date')->nullable();
            $table->boolean('is_duedate_undefined')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_com_once_payments');
    }
};
