USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetAllergenen;

DELIMITER $$

CREATE PROCEDURE sp_GetAllergenen()
BEGIN

    SELECT ALGE.Id
          ,ALGE.Naam
          ,ALGE.Omschrijving
    FROM Allergeen as ALGE;

END$$

DELIMITER ;