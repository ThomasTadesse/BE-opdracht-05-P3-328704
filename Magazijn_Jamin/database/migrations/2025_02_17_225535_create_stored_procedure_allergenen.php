<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
        DROP PROCEDURE IF EXISTS GetAllergenen;
        CREATE PROCEDURE GetAllergenen()
        BEGIN
            SELECT 
                a.id AS Id,
                p.Naam AS ProductNaam,
                a.Naam AS AllergeenNaam,
                a.Omschrijving,
                m.AantalAanwezig
            FROM Allergeen a
            JOIN ProductPerAllergeen pa ON a.Id = pa.AllergeenId
            JOIN Product p ON pa.ProductId = p.Id
            LEFT JOIN Magazijn m ON p.Id = m.ProductId
            WHERE a.IsActief = 1 AND p.IsActief = 1
            ORDER BY ProductNaam ASC;
        END');

        DB::unprepared('
        DROP PROCEDURE IF EXISTS GetLeverancierByProductId;
        CREATE PROCEDURE GetLeverancierByProductId(IN productId INT)
        BEGIN
            SELECT 
                l.id AS Id,
                l.Naam AS LeverancierNaam,
                l.Contactpersoon,
                l.Mobiel,
                c.Stad,
                c.Straat,
                c.Huisnummer
            FROM Leverancier l
            JOIN Contact c ON l.ContactId = c.Id
            JOIN ProductPerLeverancier ppl ON l.Id = ppl.LeverancierId
            WHERE ppl.ProductId = productId
            AND ppl.IsActief = 1;
        END');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS GetAllergenen');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetLeverancierByProductId');
    }
};
