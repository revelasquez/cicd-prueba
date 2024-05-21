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
        Schema::create('eco_com_legal_guardians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('economic_complement_id')->index();
            $table->bigInteger('city_identity_card_id')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mothers_last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('surname_husband')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cell_phone_number')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();
            $table->date('due_date')->nullable();
            $table->boolean('is_duedate_undefined')->default(false);
            $table->bigInteger('eco_com_legal_guardian_type_id')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->string('number_authority')->nullable();
            $table->string('notary_of_public_faith')->nullable();
            $table->string('notary')->nullable();
            $table->date('date_authority')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_com_legal_guardians');
    }
};
