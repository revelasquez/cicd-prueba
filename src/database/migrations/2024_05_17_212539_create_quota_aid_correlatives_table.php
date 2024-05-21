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
        Schema::create('quota_aid_correlatives', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('wf_state_id')->nullable();
            $table->bigInteger('quota_aid_mortuary_id')->nullable();
            $table->string('code')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
            $table->bigInteger('procedure_type_id')->nullable();
            $table->text('note')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quota_aid_correlatives');
    }
};
