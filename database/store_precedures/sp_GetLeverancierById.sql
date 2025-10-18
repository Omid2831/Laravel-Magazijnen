USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetLeverancierById;

DELIMITER $$

CREATE PROCEDURE sp_GetLeverancierById(
    IN p_ProductId INT
)
BEGIN
    SELECT
         p.Naam AS ProductNaam
       , DATE_FORMAT(PPL.DatumLevering, '%d-%m-%Y') AS DatumLevering
       , PPL.Aantal AS AantalGeleverd
       , DATE_FORMAT(PPL.DatumEerstVolgendeLevering, '%d-%m-%Y') AS DatumEerstVolgendeLevering

    FROM ProductPerLeverancier AS PPL

    INNER JOIN Product AS p
    ON PPL.ProductId = p.Id

    WHERE PPL.ProductId = p_ProductId;
END$$

DELIMITER ;
