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
        Schema::create('spouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('affiliate_id');
            $table->bigInteger('city_identity_card_id')->nullable();
            $table->string('identity_card');
            $table->string('registration')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mothers_last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('surname_husband')->nullable();
            $table->enum('civil_status', ['C', 'S', 'V', 'D'])->nullable();
            $table->date('birth_date')->nullable();
            $table->date('date_death')->nullable();
            $table->string('reason_death')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();
            $table->bigInteger('city_birth_id')->nullable();
            $table->string('death_certificate_number')->nullable();
            $table->date('due_date')->nullable();
            $table->boolean('is_duedate_undefined')->default(false);
            $table->string('official', 350)->nullable();
            $table->string('book', 350)->nullable();
            $table->string('departure', 350)->nullable();
            $table->date('marriage_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spouses');
    }
};
