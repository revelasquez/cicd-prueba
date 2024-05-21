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
        Schema::create('loan_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('land_lot_number');
            $table->string('neighborhood_unit');
            $table->string('location');
            $table->float('surface');
            $table->string('measurement');
            $table->bigInteger('cadastral_code');
            $table->string('limit');
            $table->string('public_deed_number');
            $table->string('lawyer');
            $table->string('registration_number');
            $table->string('real_folio_number');
            $table->string('public_deed_date');
            $table->float('net_realizable_value');
            $table->float('commercial_value')->nullable();
            $table->float('rescue_value')->nullable();
            $table->bigInteger('real_city_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_properties');
    }
};
