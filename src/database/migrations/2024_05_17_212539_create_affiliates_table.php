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
        Schema::create('affiliates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('affiliate_state_id')->nullable()->index();
            $table->bigInteger('city_identity_card_id')->nullable()->index();
            $table->bigInteger('city_birth_id')->nullable()->index();
            $table->bigInteger('degree_id')->nullable()->index();
            $table->bigInteger('unit_id')->nullable()->index();
            $table->bigInteger('category_id')->nullable()->index();
            $table->bigInteger('pension_entity_id')->nullable()->index();
            $table->string('identity_card')->unique();
            $table->string('registration')->nullable();
            $table->enum('type', ['Comando', 'Batallón'])->nullable();
            $table->string('last_name')->nullable();
            $table->string('mothers_last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('surname_husband')->nullable();
            $table->enum('gender', ['M', 'F']);
            $table->enum('civil_status', ['C', 'S', 'V', 'D'])->nullable();
            $table->date('birth_date')->nullable();
            $table->date('date_entry')->nullable();
            $table->date('date_death')->nullable();
            $table->string('reason_death')->nullable();
            $table->date('date_derelict')->nullable();
            $table->string('reason_derelict')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cell_phone_number')->nullable();
            $table->bigInteger('nua')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();
            $table->integer('service_years')->nullable();
            $table->integer('service_months')->nullable();
            $table->string('death_certificate_number')->nullable();
            $table->date('due_date')->nullable();
            $table->boolean('is_duedate_undefined')->default(false);
            $table->bigInteger('account_number')->nullable();
            $table->bigInteger('financial_entity_id')->nullable()->index();
            $table->enum('sigep_status', ['ACTIVO', 'ELABORADO', 'VALIDADO', 'SIN REGISTRO', 'REGISTRO OBSERVADO', 'ACTIVO-PAGO-VENTANILLA'])->nullable();
            $table->text('unit_police_description')->nullable();
            $table->integer('id_person_senasir')->nullable()->unique();
            $table->date('date_last_contribution')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliates');
    }
};
