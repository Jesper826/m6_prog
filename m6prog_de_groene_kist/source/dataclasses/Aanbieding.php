<?php
// Dataclass for `aanbiedingen` table

require_once __DIR__ . '/../database.php';

class Aanbieding
{
    public int $idaanbiedingen;
    public ?int $korting;
    public int $product_idproduct;

    public function __construct(int $idaanbiedingen = 0, ?int $korting = null, int $product_idproduct = 0)
    {
        $this->idaanbiedingen = $idaanbiedingen;
        $this->korting = $korting;
        $this->product_idproduct = $product_idproduct;
    }
}
