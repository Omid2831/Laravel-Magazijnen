USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetProductPerLeverancier;

DELIMITER $$

CREATE PROCEDURE sp_GetProductPerLeverancier(
    IN p_ProductId INT
)
BEGIN
    SELECT 
         P.Naam AS ProductNaam
        ,PPL.DatumLevering AS DatumLaatsteLevering
        ,PPL.Aantal as AantalGeleverd
        ,PPL.DatumEerstVolgendeLevering AS EerstvolgendeLevering
        ,M.AantalAanwezig AS DatumEerstVolgendeLevering

    FROM Product P

    LEFT JOIN ProductPerLeverancier PPL 
        ON P.Id = PPL.ProductId
    LEFT JOIN Magazijn M 
        ON P.Id = M.ProductId

    WHERE P.Id = p_ProductId
    ORDER BY PPL.DatumLevering ASC;
END $$

DELIMITER ;
