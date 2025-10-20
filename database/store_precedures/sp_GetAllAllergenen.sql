USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_GetAllAllergenen;

DELIMITER $$

CREATE PROCEDURE sp_GetAllAllergenen()
BEGIN

    SELECT ALGE.Id
          ,ALGE.Naam
          ,ALGE.Omschrijving
          ,FORMAT(ALGE.DatumGewijzigd, '%d-%m-%Y') AS DatumGewijzigd
    FROM Allergeen as ALGE;

END$$

DELIMITER ;