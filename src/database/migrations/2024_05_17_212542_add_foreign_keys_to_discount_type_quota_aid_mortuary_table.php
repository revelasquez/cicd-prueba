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
        Schema::table('discount_type_quota_aid_mortuary', function (Blueprint $table) {
            $table->foreign(['discount_type_id'])->references(['id'])->on('discount_types')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['quota_aid_mortuary_id'])->references(['id'])->on('quota_aid_mortuaries')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('discount_type_quota_aid_mortuary', function (Blueprint $table) {
            $table->dropForeign('discount_type_quota_aid_mortuary_discount_type_id_foreign');
            $table->dropForeign('discount_type_quota_aid_mortuary_quota_aid_mortuary_id_foreign');
        });
    }
};
