-- ********************************************************
-- Version:       Date:       Author:           
-- ********       ****        *******         
-- 01             03-03-2025  Thomas Tadesse
-- ********************************************************

USE `magazijn-jamin`;

-- Step 01:
-- Goal: Create a new Stored Procedure that returns all Allergens
-- ********************************************************
-- Version:       Date:       Author:           Description
-- ********       ****        *******           ***********
-- 01             03-03-2025  Thomas Tadesse    New Stored Procedure
-- ********************************************************

DELIMITER $$
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
        $$
DELIMITER ;