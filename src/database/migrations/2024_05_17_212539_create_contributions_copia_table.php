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
        Schema::create('contributions_copia', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('affiliate_id')->nullable()->index('idx_affiliate_id');
            $table->bigInteger('degree_id')->nullable();
            $table->bigInteger('unit_id')->nullable();
            $table->bigInteger('breakdown_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->date('month_year')->nullable()->index('idx_month_year');
            $table->string('type')->nullable();
            $table->decimal('base_wage', 13)->nullable();
            $table->decimal('seniority_bonus', 13)->nullable();
            $table->decimal('study_bonus', 13)->nullable();
            $table->decimal('position_bonus', 13)->nullable();
            $table->decimal('border_bonus', 13)->nullable();
            $table->decimal('east_bonus', 13)->nullable();
            $table->decimal('public_security_bonus', 13)->nullable();
            $table->decimal('gain', 13)->nullable();
            $table->decimal('payable_liquid', 13)->nullable();
            $table->decimal('quotable', 13)->nullable();
            $table->decimal('retirement_fund', 13)->nullable();
            $table->decimal('mortuary_quota', 13)->nullable();
            $table->decimal('subtotal', 13)->nullable();
            $table->decimal('interest', 13)->nullable();
            $table->decimal('total', 13)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('contribution_type_id')->nullable();
            $table->string('contributionable_type')->nullable()->index('idx_contributionable_type');
            $table->bigInteger('contributionable_id')->nullable();
            $table->bigInteger('contribution_type_mortuary_id')->nullable();

            $table->index(['affiliate_id', 'contributionable_type'], 'idx_affiliate_id_contributionable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions_copia');
    }
};
