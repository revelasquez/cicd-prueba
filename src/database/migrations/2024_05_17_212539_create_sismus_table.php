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
        Schema::create('sismus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->float('amount_approved');
            $table->smallInteger('loan_term');
            $table->float('balance');
            $table->float('estimated_quota');
            $table->date('date_cut_refinancing')->nullable();
            $table->bigInteger('loan_id');
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('disbursement_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sismus');
    }
};
