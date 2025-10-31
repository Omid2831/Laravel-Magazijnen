USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetAllProducts;

DELIMITER $$

CREATE PROCEDURE sp_GetAllProducts(

)
BEGIN

    SELECT 	 PROD.Id                    AS Id
			,PROD.Naam                  AS Naam
			,PROD.Barcode               AS Barcode
            ,IF (MOD(MAGA.VerpakkingsEenheid, 1) = 0, FLOOR(MAGA.VerpakkingsEenheid), MAGA.VerpakkingsEenheid)  AS VerpakkingsEenheid
            ,MAGA.AantalAanwezig        AS AantalAanwezig
	FROM Product AS PROD    
    INNER JOIN Magazijn AS MAGA
    ON PROD.Id = MAGA.ProductId;

END$$

DELIMITER ;