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
        Schema::create('eco_com_procedures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->date('year');
            $table->enum('semester', ['Primer', 'Segundo']);
            $table->date('normal_start_date');
            $table->date('normal_end_date');
            $table->date('lagging_start_date');
            $table->date('lagging_end_date');
            $table->date('additional_start_date');
            $table->date('additional_end_date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->decimal('indicator')->nullable();
            $table->string('rent_month')->nullable();
            $table->integer('sequence')->nullable();

            $table->unique(['year', 'semester']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_com_procedures');
    }
};
