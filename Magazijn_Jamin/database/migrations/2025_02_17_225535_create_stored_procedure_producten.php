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
        DROP PROCEDURE IF EXISTS spGetProducts;
        CREATE PROCEDURE spGetProducts()
        BEGIN
            SELECT 
                PRCT.id              AS Id,
                PRCT.Naam            AS ProductNaam,
                LVR.Naam             AS LeverancierNaam,
                LVR.Contactpersoon   AS Contactpersoon,
                MGZN.AantalAanwezig  AS AantalAanwezig,
                PPL.DatumLevering    AS DatumLevering,
                PPL.DatumEerstVolgendeLevering AS DatumEerstVolgendeLevering
            FROM 
                Product PRCT
            LEFT JOIN 
                Magazijn MGZN ON PRCT.Id = MGZN.ProductId
            LEFT JOIN
                ProductPerLeverancier PPL ON PRCT.Id = PPL.ProductId
            LEFT JOIN
                Leverancier LVR ON PPL.LeverancierId = LVR.Id
            WHERE 
                PRCT.IsActief = 1
            ORDER BY 
                LeverancierNaam DESC;
        END;
        ');

        DB::unprepared('
            DROP PROCEDURE IF EXISTS spGetProductDetails;
            CREATE PROCEDURE spGetProductDetails(
                IN productId INT
            )
            BEGIN
                SELECT 
                    PRCT.Naam            AS ProductNaam,
                    ALRG.Naam            AS AllergeenNaam,
                    PPL.DatumLevering    AS DatumLevering,
                    PPL.Aantal           AS Aantal
                FROM 
                    Product PRCT
                JOIN 
                    ProductPerAllergeen PPA ON PRCT.Id = PPA.ProductId
                JOIN 
                    Allergeen ALRG ON PPA.AllergeenId = ALRG.Id
                LEFT JOIN 
                    ProductPerLeverancier PPL ON PRCT.Id = PPL.ProductId
                WHERE 
                    PRCT.IsActief = 1
                    AND ALRG.IsActief = 1
                    AND PRCT.Id = productId
                ORDER BY 
                    PRCT.Naam ASC,
                    ALRG.Naam ASC;
            END;
        ');

        DB::unprepared('
            DROP PROCEDURE IF EXISTS spGetProductsByDateRange;
            CREATE PROCEDURE spGetProductsByDateRange(
                IN startDate DATE,
                IN endDate DATE
            )
            BEGIN
                SELECT 
                    PRCT.id              AS Id,
                    PRCT.Naam            AS ProductNaam,
                    LVR.Naam             AS LeverancierNaam,
                    LVR.Contactpersoon   AS Contactpersoon,
                    MGZN.AantalAanwezig  AS AantalAanwezig,
                    PPL.DatumLevering    AS DatumLevering,
                    PPL.DatumEerstVolgendeLevering AS DatumEerstVolgendeLevering
                FROM 
                    Product PRCT
                LEFT JOIN 
                    Magazijn MGZN ON PRCT.Id = MGZN.ProductId
                LEFT JOIN
                    ProductPerLeverancier PPL ON PRCT.Id = PPL.ProductId
                LEFT JOIN
                    Leverancier LVR ON PPL.LeverancierId = LVR.Id
                WHERE 
                    PRCT.IsActief = 1
                    AND PPL.DatumLevering BETWEEN startDate AND endDate
                ORDER BY 
                    LeverancierNaam DESC;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS spGetProducts;');
        DB::unprepared('DROP PROCEDURE IF EXISTS spGetProductDetails;');
        DB::unprepared('DROP PROCEDURE IF EXISTS spGetProductsByDateRange;');
    }
};
