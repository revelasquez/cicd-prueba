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
        Schema::create('contribution_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('group_type_contribution_id')->nullable();
            $table->string('name');
            $table->string('shortened');
            $table->timestamps();
            $table->softDeletes();
            $table->text('description')->nullable();
            $table->string('operator')->nullable();
            $table->string('display_name')->nullable();
            $table->integer('sequence')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_types');
    }
};
