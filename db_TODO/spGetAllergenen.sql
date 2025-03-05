-- ********************************************************
-- Version:       Date:       Author:           
-- ********       ****        *******         
-- 01             18-02-2025  Thomas Tadesse    1:AM :')
-- ********************************************************

USE `magazijn-jamin`;

-- Step 01:
-- Goal: Create a new Stored Procedure that returns all Allergens
-- ********************************************************
-- Version:       Date:       Author:           Description
-- ********       ****        *******           ***********
-- 01             18-02-2025  Thomas Tadesse    New Stored Procedure   1:02AM :')
-- ********************************************************

DELIMITER $$

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
        END
        $$
DELIMITER ;