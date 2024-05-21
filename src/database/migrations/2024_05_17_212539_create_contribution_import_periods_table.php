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
        Schema::create('contribution_import_periods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('month_year')->comment('periodo de importación');
            $table->string('table')->comment('nombre de la tabla de importación');
            $table->string('type')->comment('tipo de importación, planilla o contribucion');
            $table->timestamps();

            $table->unique(['month_year', 'table']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_import_periods');
    }
};
