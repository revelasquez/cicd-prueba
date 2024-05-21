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
        Schema::create('procedure_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('module_id')->nullable();
            $table->string('name');
            $table->timestamps();
            $table->string('second_name')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedure_types');
    }
};
