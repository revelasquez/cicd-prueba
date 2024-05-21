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
        Schema::create('direct_contributions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('affiliate_id');
            $table->bigInteger('user_id');
            $table->bigInteger('city_id');
            $table->bigInteger('procedure_modality_id');
            $table->bigInteger('procedure_state_id');
            $table->date('commitment_date');
            $table->string('document_number')->nullable();
            $table->date('document_date')->nullable();
            $table->date('start_contribution_date')->nullable();
            $table->date('date');
            $table->string('code');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_contributions');
    }
};
