USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetAllAllergenen;

DELIMITER $$

CREATE PROCEDURE sp_GetAllAllergenen()
BEGIN

    SELECT ALGE.Id
          ,ALGE.Naam
          ,ALGE.Omschrijving
    FROM Allergeen as ALGE;

END$$

DELIMITER ;