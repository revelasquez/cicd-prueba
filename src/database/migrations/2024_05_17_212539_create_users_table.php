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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('city_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->rememberToken();
            $table->string('position')->nullable();
            $table->boolean('is_commission')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('active')->default(true);
            $table->enum('status', ['active', 'inactive'])->nullable();
            $table->string('identity_card')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
