DROP PROCEDURE IF EXISTS sp_GetAllergeenById;

DELIMITER $$

CREATE PROCEDURE sp_GetAllergeenById(
    IN p_id INT
)

BEGIN

    SELECT Id
          ,Naam
          ,Omschrijving
    FROM Allergeen
    WHERE Id = p_id;

END$$

DELIMITER ;