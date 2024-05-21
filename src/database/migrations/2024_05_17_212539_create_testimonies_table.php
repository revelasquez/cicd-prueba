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
        Schema::create('testimonies', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('affiliate_id');
            $table->bigInteger('user_id');
            $table->string('document_type')->nullable();
            $table->string('number')->nullable();
            $table->date('date')->nullable();
            $table->string('court')->nullable();
            $table->string('place')->nullable();
            $table->string('notary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonies');
    }
};
