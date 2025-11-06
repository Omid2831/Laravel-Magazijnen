USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetProductById;

DELIMITER $$
CREATE PROCEDURE sp_GetProductById (
    IN p_ProductID INT
)
BEGIN
    SELECT 
             PROD.Id                    AS Id
			,PROD.Naam                  AS Naam
			,PROD.Barcode               AS Barcode

            FROM Product AS PROD

            INNER JOIN Magazijn AS MAGA
            ON PROD.Id = MAGA.ProductId

    WHERE PROD.Id = p_ProductID;

END$$

DELIMITER ;