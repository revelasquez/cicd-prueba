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
        Schema::create('eco_com_review_procedures', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('review_procedure_id');
            $table->bigInteger('economic_complement_id');
            $table->bigInteger('user_id');
            $table->boolean('is_valid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_com_review_procedures');
    }
};
