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
        Schema::create('contribution_type_quota_aids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('shortened')->nullable();
            $table->text('description')->nullable();
            $table->string('operator');
            $table->string('display_name')->nullable();
            $table->integer('sequence');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_type_quota_aids');
    }
};
