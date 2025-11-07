USE aryanDBassignment;

DROP PROCEDURE IF EXISTS sp_DeleteAllergenen;


DELIMITER $$

CREATE PROCEDURE sp_DeleteAllergenen(
    IN p_id INT
)
BEGIN

    DELETE FROM Allergeen
    WHERE Id = p_id;

    SELECT ROW_COUNT() AS affected;

END$$

DELIMITER ;

