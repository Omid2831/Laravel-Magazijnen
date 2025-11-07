USE aryanDBassignment;

DROP PROCEDURE IF EXISTS Sp_GetAllergeenById;

DELIMITER $$

CREATE PROCEDURE Sp_GetAllergeenById(
    IN p_id INT
)
BEGIN
    SELECT

             A.Id AS AllergeenId
            ,A.Naam AS AllergeenNaam
            ,A.Omschrijving AS AllergeenOmschrijving
            ,DATE_FORMAT(A.DatumGewijzigd , '%d-%m-%Y') AS DatumGewijzigd

    FROM ProductPerAllergeen PA
    INNER JOIN Allergeen A 
        ON A.Id = PA.AllergeenId
    WHERE PA.ProductId = p_id
      AND PA.IsActief = 1
    ORDER BY A.Naam ASC;
END$$

DELIMITER ;
