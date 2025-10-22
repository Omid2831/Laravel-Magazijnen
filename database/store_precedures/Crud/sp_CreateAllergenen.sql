DROP PROCEDURE IF EXISTS sp_CreateAllergenen;

DELIMITER $$

CREATE PROCEDURE sp_CreateAllergenen(
    IN p_name         VARCHAR(50)
   ,IN p_description  VARCHAR(255)
)
BEGIN

    INSERT INTO Allergeen(
        naam
       ,omschrijving
    )
    VALUES (p_name, p_description);

    SELECT LAST_INSERT_ID() AS new_id;

END$$

DELIMITER ;