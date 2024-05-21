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
        Schema::create('contribution_passives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('affiliate_id');
            $table->date('month_year')->comment('Periodo del aporte');
            $table->decimal('quotable', 13)->default(0)->comment('cotizable');
            $table->decimal('rent_pension', 13)->default(0)->comment('Monto de Renta o pension del sec pasivo');
            $table->decimal('dignity_rent', 13)->default(0)->comment('Renta dignidad');
            $table->decimal('interest', 13)->default(0)->comment('Interes');
            $table->decimal('total', 13)->default(0)->comment('Total aporte');
            $table->enum('affiliate_rent_class', ['VEJEZ', 'VIUDEDAD', 'VEJEZ/VIUDEDAD'])->default('VEJEZ')->comment('Tipo de Afiliado que realizo el Aporte');
            $table->bigInteger('contribution_state_id');
            $table->string('contributionable_type')->nullable();
            $table->bigInteger('contributionable_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->decimal('aps_total_cc', 13)->default(0)->comment('Fracción de Compensación de Cotización');
            $table->decimal('aps_total_fsa', 13)->default(0)->comment('Fracción de Saldo Acumulado');
            $table->decimal('aps_total_fs', 13)->default(0)->comment('Fracción Solidaria de Vejez');
            $table->decimal('aps_total_death', 13)->default(0)->comment('Renta por Muerte');
            $table->decimal('aps_disability', 13)->default(0)->comment('Renta invalides');
            $table->decimal('aps_reimbursement', 13)->default(0)->comment('Reintegro');
            $table->bigInteger('contribution_type_mortuary_id')->nullable();

            $table->unique(['affiliate_id', 'month_year']);
            $table->index(['contributionable_type', 'contributionable_id'], 'contribution_passives_contributionable_type_contributionable_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_passives');
    }
};
