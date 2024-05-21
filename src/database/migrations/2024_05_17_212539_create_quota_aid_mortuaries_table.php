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
        Schema::create('quota_aid_mortuaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('affiliate_id');
            $table->bigInteger('quota_aid_procedure_id')->nullable();
            $table->bigInteger('procedure_modality_id');
            $table->bigInteger('city_start_id')->nullable();
            $table->bigInteger('city_end_id')->nullable();
            $table->string('code');
            $table->date('reception_date')->nullable();
            $table->decimal('subtotal', 13);
            $table->decimal('total', 13);
            $table->bigInteger('workflow_id');
            $table->bigInteger('wf_state_current_id');
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('inbox_state')->default(false);
            $table->bigInteger('procedure_state_id')->nullable();
            $table->uuid('uuid')->nullable()->unique();
            $table->integer('number_qualified_contributions')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quota_aid_mortuaries');
    }
};
