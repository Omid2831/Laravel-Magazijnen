USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_getProductsByLeverancierId;

DELIMITER $$
CREATE PROCEDURE sp_getProductsByLeverancierId (IN p_LeverancierId INT)
BEGIN
    SELECT
        P.Id
        ,P.Naam AS ProductNaam
        ,MAX(M.AantalAanwezig) AS AantalInMagazijn
        ,MAX(M.VerpakkingsEenheid) AS Verpakkingseenheid
        ,MAX(PPL.DatumLevering) AS LaatsteLevering
        ,MIN(PPL.DatumEerstVolgendeLevering) AS EerstvolgendeLevering
    FROM
        Product P
    INNER JOIN ProductPerLeverancier PPL ON P.Id = PPL.ProductId
    LEFT JOIN Magazijn M ON P.Id = M.ProductId
    WHERE
        PPL.LeverancierId = p_LeverancierId
    GROUP BY
    P.Id,
    P.Naam;
END $$

DELIMITER ;