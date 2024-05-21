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
        Schema::create('eco_com_rents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('degree_id');
            $table->date('year');
            $table->enum('semester', ['Primer', 'Segundo']);
            $table->decimal('minor', 13);
            $table->decimal('higher', 13);
            $table->decimal('average', 13);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->bigInteger('procedure_modality_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_com_rents');
    }
};
