<?php
// Dataclass for `klant_has_product` join table

require_once __DIR__ . '/../database.php';

class KlantHasProduct
{
    public int $klant_idklant;
    public int $product_idproduct;

    public function __construct(int $klant_idklant = 0, int $product_idproduct = 0)
    {
        $this->klant_idklant = $klant_idklant;
        $this->product_idproduct = $product_idproduct;
    }
}
