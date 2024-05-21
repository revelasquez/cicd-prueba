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
        Schema::create('payroll_commands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('affiliate_id')->comment('Id del afiliado titular');
            $table->bigInteger('affiliate_state_id')->comment('Id del estado del afiliado');
            $table->bigInteger('unit_id')->nullable()->comment('Unidad');
            $table->bigInteger('breakdown_id')->nullable()->comment('Desglose');
            $table->bigInteger('category_id')->nullable()->comment('Categoría');
            $table->integer('month_p')->comment('Mes');
            $table->integer('year_p')->comment('Año');
            $table->string('identity_card')->comment('Carnet');
            $table->string('last_name')->nullable()->comment('Apellido paterno');
            $table->string('mothers_last_name')->nullable()->comment('Apellido materno');
            $table->string('surname_husband')->nullable()->comment('Apellido esposo');
            $table->string('first_name')->comment('Primer nombre');
            $table->string('second_name')->nullable()->comment('Segundo nombre');
            $table->string('civil_status')->comment('Estado civil');
            $table->bigInteger('hierarchy_id')->comment('Nivel jerarquico');
            $table->bigInteger('degree_id')->nullable()->comment('Grado');
            $table->string('gender')->comment('Género');
            $table->decimal('base_wage', 13)->comment('Sueldo');
            $table->decimal('seniority_bonus', 13)->comment('Bono antiguedad');
            $table->decimal('study_bonus', 13)->comment('Bono estudio');
            $table->decimal('position_bonus', 13)->comment('Bono cargo');
            $table->decimal('border_bonus', 13)->comment('Bono frontera');
            $table->decimal('east_bonus', 13)->comment('Bono oriente');
            $table->decimal('gain', 13)->comment('Total ganado');
            $table->decimal('total', 13)->comment('Total aporte');
            $table->decimal('payable_liquid', 13)->nullable()->comment('Liquido pagado');
            $table->date('birth_date')->comment('Fecha de nacimiento');
            $table->date('date_entry')->comment('Fecha de ingreso');
            $table->enum('affiliate_type', ['REGULAR', 'NUEVO'])->default('REGULAR')->comment('Afiliado regular o nuevo');
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('reimbursement')->default(false)->comment('Verdadero es reintegro, falso es planilla');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_commands');
    }
};
