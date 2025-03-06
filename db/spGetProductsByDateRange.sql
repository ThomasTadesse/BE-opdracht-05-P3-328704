-- ********************************************************
-- Version:       Date:       Author:           
-- ********       ****        *******         
-- 01             03-03-2025  Thomas Tadesse    
-- ********************************************************

USE `magazijn-jamin`;

-- Step 01:
-- Goal: Create a new Stored Procedure that returns products
-- ********************************************************
-- Version:       Date:       Author:           Description
-- ********       ****        *******           ***********
-- 01             03-03-2025  Thomas Tadesse    New Stored Procedure  
-- ********************************************************

DELIMITER $$

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
        $$
DELIMITER ;