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
        Schema::create('saneamientodb2_csv', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->integer('id_correcto')->nullable();
            $table->string('identity_card', 16)->nullable();
            $table->string('registration', 16)->nullable();
            $table->string('type', 8)->nullable();
            $table->string('last_name', 16)->nullable();
            $table->string('mothers_last_name', 16)->nullable();
            $table->string('first_name', 16)->nullable();
            $table->string('second_name', 8)->nullable();
            $table->string('surname_husband', 16)->nullable();
            $table->string('gender', 1)->nullable();
            $table->string('birth_date', 16)->nullable();
            $table->string('min_aporte', 16)->nullable();
            $table->string('max_aporte', 16)->nullable();
            $table->string('archivo', 1)->nullable();
            $table->string('complemento', 1)->nullable();
            $table->string('ptmos', 2)->nullable();
            $table->string('observacion', 32)->nullable();
            $table->string('column19', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saneamientodb2_csv');
    }
};
