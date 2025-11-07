USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetProductPerLeverancier;

DELIMITER $$

CREATE PROCEDURE sp_GetProductPerLeverancier(
    IN p_ProductId INT
)
BEGIN
    SELECT
         P.Naam AS ProductNaam
        ,DATE_FORMAT(PPL.DatumLevering, '%d-%m-%Y') AS DatumLaatsteLevering
        ,PPL.Aantal as AantalGeleverd
        ,DATE_FORMAT(PPL.DatumEerstVolgendeLevering, '%d-%m-%Y' ) AS EerstvolgendeLevering
        ,M.AantalAanwezig AS AantalAanwezig

    FROM Product P

    LEFT JOIN ProductPerLeverancier PPL 
        ON P.Id = PPL.ProductId
    LEFT JOIN Magazijn M 
        ON P.Id = M.ProductId

    WHERE P.Id = p_ProductId
    ORDER BY PPL.DatumLevering ASC;
END $$

DELIMITER ;
