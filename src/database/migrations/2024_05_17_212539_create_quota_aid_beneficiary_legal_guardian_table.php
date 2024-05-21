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
        Schema::create('quota_aid_beneficiary_legal_guardian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('quota_aid_beneficiary_id');
            $table->bigInteger('quota_aid_legal_guardian_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quota_aid_beneficiary_legal_guardian');
    }
};
