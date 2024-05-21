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
        Schema::create('movement_concepts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('shortened')->unique();
            $table->string('description');
            $table->enum('type', ['INGRESO', 'EGRESO']);
            $table->string('abbreviated_supporting_document');
            $table->boolean('is_valid')->default(true);
            $table->bigInteger('user_id');
            $table->bigInteger('role_id');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['name', 'type', 'abbreviated_supporting_document'], 'movement_concepts_name_type_abbreviated_supporting_document_uni');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movement_concepts');
    }
};
