USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetProductPerAlleergeen;

DELIMITER $$

CREATE PROCEDURE sp_GetAllergeenByProductId(
    IN p_product_id INT
)
BEGIN
    SELECT
             A.Id AS AllergeenId
            ,A.Naam AS Naam
            ,A.Omschrijving AS Omschrijving
            ,DATE_FORMAT(A.DatumGewijzigd, '%d-%m-%Y') AS DatumGewijzigd

    FROM ProductPerAllergeen PPA

    JOIN Allergeen A ON PPA.AllergeenId = A.Id

    WHERE PPA.ProductId = p_product_id;

END$$

DELIMITER ;
