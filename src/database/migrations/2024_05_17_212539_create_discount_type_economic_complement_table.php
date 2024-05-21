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
        Schema::create('discount_type_economic_complement', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('discount_type_id')->nullable();
            $table->bigInteger('economic_complement_id');
            $table->decimal('amount', 13)->nullable();
            $table->string('message')->nullable();
            $table->date('date');
            $table->timestamps();

            $table->unique(['discount_type_id', 'economic_complement_id'], 'discount_type_economic_complement_discount_type_id_economic_com');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_type_economic_complement');
    }
};
