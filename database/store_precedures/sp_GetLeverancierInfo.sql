USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetLeverancierInfo;


DELIMITER $$

CREATE PROCEDURE sp_GetLeverancierInfo(
    IN p_ProductID INT
)
BEGIN

    SELECT DISTINCT L.Naam

        , L.Contactpersoon
        , L.Leveranciernummer
        , L.Mobiel

    FROM Leverancier AS L

    INNER JOIN ProductPerLeverancier AS PPL
    ON L.Id = PPL.LeverancierId

    WHERE PPL.ProductId = p_ProductID;
END$$

DELIMITER ;