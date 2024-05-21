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
        Schema::create('discount_type_quota_aid_mortuary', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('discount_type_id')->nullable();
            $table->bigInteger('quota_aid_mortuary_id')->nullable();
            $table->decimal('amount', 13)->nullable();
            $table->date('date')->nullable();
            $table->string('code')->nullable();
            $table->string('note_code')->nullable();
            $table->date('note_code_date')->nullable();
            $table->timestamps();

            $table->unique(['discount_type_id', 'quota_aid_mortuary_id'], 'discount_type_quota_aid_mortuary_discount_type_id_quota_aid_mor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_type_quota_aid_mortuary');
    }
};
