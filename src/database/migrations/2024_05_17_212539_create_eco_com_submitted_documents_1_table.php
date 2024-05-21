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
        Schema::create('eco_com_submitted_documents_1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('economic_complement_id');
            $table->bigInteger('eco_com_requirement_id');
            $table->date('reception_date');
            $table->boolean('status')->default(false);
            $table->string('comment')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();

            $table->unique(['economic_complement_id', 'eco_com_requirement_id'], 'eco_com_submitted_documents_economic_complement_id_eco_com_requ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_com_submitted_documents_1');
    }
};
