-- Selecteer al het fruit, gesorteerd op naam
SELECT * FROM product WHERE naam LIKE ' appel ' OR naam LIKE ' banaan ' OR naam LIKE ' bes ' OR naam LIKE ' sinaasappel ' ORDER BY naam;
 
-- Selecteer alle groenten, gesorteerd op naam
SELECT * FROM product WHERE naam LIKE ' tomaat ' OR naam LIKE ' komkommer ' OR naam LIKE ' sla ' OR naam LIKE ' wortel ' ORDER BY naam;
 
-- Zoek een product op naam (of een deel ervan)
SELECT * FROM product WHERE naam LIKE ' appel ';
 
-- Selecteer aanbiedingen, gegroepeerd op soort (in dit geval, toon het product in de aanbieding)
SELECT p.naam, p.prijs, a.korting
FROM aanbiedingen a
JOIN product p ON a.product_idproduct = p.idproduct
GROUP BY p.naam, p.prijs, a.korting;
 
 