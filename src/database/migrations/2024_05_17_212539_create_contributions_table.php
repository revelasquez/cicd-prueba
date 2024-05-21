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
        Schema::create('contributions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('affiliate_id');
            $table->bigInteger('degree_id')->nullable();
            $table->bigInteger('unit_id')->nullable();
            $table->bigInteger('breakdown_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->date('month_year');
            $table->enum('type', ['Planilla', 'Directo']);
            $table->decimal('base_wage', 13);
            $table->decimal('seniority_bonus', 13);
            $table->decimal('study_bonus', 13);
            $table->decimal('position_bonus', 13);
            $table->decimal('border_bonus', 13);
            $table->decimal('east_bonus', 13);
            $table->decimal('public_security_bonus', 13)->nullable();
            $table->decimal('gain', 13);
            $table->decimal('payable_liquid', 13)->nullable();
            $table->decimal('quotable', 13);
            $table->decimal('retirement_fund', 13);
            $table->decimal('mortuary_quota', 13);
            $table->decimal('subtotal', 13)->nullable();
            $table->decimal('interest', 13)->nullable();
            $table->decimal('total', 13);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();
            $table->bigInteger('contribution_type_id')->nullable();
            $table->string('contributionable_type')->nullable();
            $table->bigInteger('contributionable_id')->nullable();
            $table->bigInteger('contribution_type_mortuary_id')->nullable();

            $table->unique(['affiliate_id', 'month_year']);
            $table->index(['contributionable_type', 'contributionable_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};
