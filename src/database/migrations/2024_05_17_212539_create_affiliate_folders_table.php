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
        Schema::create('affiliate_folders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('affiliate_id');
            $table->bigInteger('procedure_modality_id');
            $table->string('code_file')->nullable();
            $table->string('folder_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_paid')->nullable();
            $table->string('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_folders');
    }
};
