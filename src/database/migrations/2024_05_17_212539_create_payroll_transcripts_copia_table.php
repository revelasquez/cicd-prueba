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
        Schema::create('payroll_transcripts_copia', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('affiliate_id')->nullable();
            $table->integer('month_p')->nullable();
            $table->integer('year_p')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mothers_last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->bigInteger('hierarchy_id')->nullable();
            $table->bigInteger('degree_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->decimal('base_wage', 13)->nullable();
            $table->decimal('seniority_bonus', 13)->nullable();
            $table->decimal('gain', 13)->nullable();
            $table->decimal('total', 13)->nullable();
            $table->decimal('study_bonus', 13)->nullable();
            $table->decimal('position_bonus', 13)->nullable();
            $table->decimal('border_bonus', 13)->nullable();
            $table->decimal('east_bonus', 13)->nullable();
            $table->string('affiliate_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_transcripts_copia');
    }
};
