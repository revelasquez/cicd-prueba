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
        Schema::create('quota_aid_procedures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hierarchy_id');
            $table->enum('type_mortuary', ['Titular', 'Conyuge', 'Viuda'])->nullable();
            $table->bigInteger('procedure_modality_id');
            $table->decimal('amount', 13);
            $table->date('year');
            $table->timestamps();
            $table->integer('months')->nullable();
            $table->boolean('is_enabled')->default(true);
            $table->integer('months_min')->nullable();
            $table->integer('months_max')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quota_aid_procedures');
    }
};
