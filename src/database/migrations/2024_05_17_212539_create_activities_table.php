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
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->bigInteger('affiliate_id');
            $table->bigInteger('spouse_id')->nullable();
            $table->bigInteger('economic_complement_id')->nullable();
            $table->bigInteger('eco_com_applicant_id')->nullable();
            $table->bigInteger('eco_com_submitted_document_id')->nullable();
            $table->text('message')->nullable();
            $table->integer('activity_type_id')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
