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
        Schema::create('addressables', function (Blueprint $table) {
            $table->bigInteger('address_id');
            $table->bigInteger('addressable_id');
            $table->string('addressable_type');
            $table->timestamps();
            $table->boolean('validated')->default(false);

            $table->primary(['address_id', 'addressable_id', 'addressable_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addressables');
    }
};
