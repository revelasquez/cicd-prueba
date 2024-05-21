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
        Schema::create('notification_sends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('carrier_id');
            $table->string('sendable_type');
            $table->bigInteger('sendable_id');
            $table->date('send_date')->comment('Fecha de envío del mensaje');
            $table->boolean('delivered')->default(false)->comment('Verificación de envío');
            $table->json('message')->comment('Mensaje enviado');
            $table->string('subject')->nullable()->comment('Asunto del mensaje');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('sender_number')->nullable();
            $table->string('receiver_number')->nullable()->comment('Número telefónico donde se envío el mensaje');
            $table->bigInteger('notification_type_id')->nullable();

            $table->index(['sendable_type', 'sendable_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_sends');
    }
};
