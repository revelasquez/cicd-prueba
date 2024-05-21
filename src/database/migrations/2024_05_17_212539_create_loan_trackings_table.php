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
        Schema::create('loan_trackings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('loan_id')->index();
            $table->bigInteger('user_id')->index();
            $table->bigInteger('loan_tracking_type_id')->index();
            $table->timestamp('tracking_date')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_trackings');
    }
};
