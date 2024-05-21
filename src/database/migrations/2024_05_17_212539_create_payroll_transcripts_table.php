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
        Schema::create('payroll_transcripts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('affiliate_id')->comment('Id del afiliado titular');
            $table->integer('month_p')->comment('Mes');
            $table->integer('year_p')->comment('Año');
            $table->string('identity_card')->comment('Carnet');
            $table->string('last_name')->nullable()->comment('Apellido paterno');
            $table->string('mothers_last_name')->nullable()->comment('Apellido materno');
            $table->string('first_name')->comment('Primer nombre');
            $table->string('second_name')->nullable()->comment('Segundo nombre');
            $table->bigInteger('hierarchy_id')->nullable()->comment('Nivel jerarquico');
            $table->bigInteger('degree_id')->nullable()->comment('Grado');
            $table->bigInteger('category_id')->nullable()->comment('Categoria');
            $table->decimal('base_wage', 13)->comment('Sueldo');
            $table->decimal('seniority_bonus', 13)->comment('Bono antiguedad');
            $table->decimal('gain', 13)->comment('Total ganado');
            $table->decimal('total', 13)->comment('Total aporte');
            $table->decimal('study_bonus', 13)->comment('Bono estudio');
            $table->decimal('position_bonus', 13)->comment('Bono cargo');
            $table->decimal('border_bonus', 13)->comment('Bono frontera');
            $table->decimal('east_bonus', 13)->comment('Bono oriente');
            $table->enum('affiliate_type', ['REGULAR', 'NUEVO'])->default('REGULAR')->comment('Afiliado regular o nuevo');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('unit_id')->nullable()->comment('Unidad');

            $table->unique(['affiliate_id', 'month_p', 'year_p']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_transcripts');
    }
};
