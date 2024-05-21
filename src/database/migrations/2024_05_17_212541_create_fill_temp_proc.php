<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("CREATE OR REPLACE PROCEDURE public.fill_temp()
 LANGUAGE plpgsql
AS $$
declare
        campo RECORD;
    begin
        for campo in (select affiliate_id
                    from affiliate_tokens
                    where api_token is not null
                    order by affiliate_id)
        loop
            insert into tmp_affiliates (affiliate_id, firebase_token, economic_complement_id, last_year, last_semester, payment_id, payment_name, modality_id, modality_name)
            select ts.affiliate_id, ts.firebase_token, ts.economic_complement_id, ts.last_year, ts.last_semester, ts.payment_id, ts.payment_name, ts.modality_id, ts.modality_name
            from temporal ts
            where ts.affiliate_id = campo.affiliate_id
            offset 0 rows
            fetch first 1 row only;
        end loop;
    end;
    $$
");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS fill_temp");
    }
};
