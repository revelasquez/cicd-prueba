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
        Schema::create('aid_contributions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('affiliate_id')->nullable();
            $table->string('month_year');
            $table->enum('type', ['PLANILLA', 'DIRECTO'])->default('PLANILLA');
            $table->decimal('quotable', 13);
            $table->decimal('rent', 13);
            $table->decimal('dignity_rent', 13);
            $table->decimal('interest', 13);
            $table->decimal('total', 13);
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('affiliate_contribution')->default(true);
            $table->decimal('mortuary_aid', 13)->nullable();
            $table->boolean('valid')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aid_contributions');
    }
};
