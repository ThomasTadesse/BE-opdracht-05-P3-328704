-- ********************************************************
-- Version:       Date:       Author:           
-- ********       ****        *******         
-- 01             18-02-2025  Thomas Tadesse 1:18PM 
-- ********************************************************

USE `magazijn-jamin`;

-- Step 01:
-- Goal: Create a new Stored Procedure that returns all Allergens
-- ********************************************************
-- Version:       Date:       Author:           Description
-- ********       ****        *******           ***********
-- 01             18-02-2025  Thomas Tadesse    New Stored Procedure   1:18PM
-- ********************************************************

DELIMITER $$
    DROP PROCEDURE IF EXISTS spGetLeverancierByProductId;
        CREATE PROCEDURE spGetLeverancierByProductId()
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
        END
        $$
DELIMITER ;