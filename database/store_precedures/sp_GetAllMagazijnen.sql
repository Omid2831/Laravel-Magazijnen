USE aryanDBassignment;
DROP PROCEDURE IF EXISTS sp_GetAllMagazijnen;
DELIMITER $$

CREATE PROCEDURE sp_GetAllMagazijnen()
BEGIN
    SELECT

         p.Barcode AS barcode
        ,p.Naam AS naam
        ,m.VerpakkingsEenheid AS verpakkingseenheid
        ,m.AantalAanwezig AS aantal_aanwezig

    FROM Magazijn m


    INNER JOIN 
              Product p 
    ON 
            m.ProductId = p.Id
    WHERE 
         m.IsActief = 1 
         AND 
         p.IsActief = 1
    ORDER BY
            p.Barcode ASC;

END$$

DELIMITER ;