<?php
// Dataclass for `klant` table

require_once __DIR__ . '/../database.php';

class Klant
{
    public int $idklant;
    public string $Naam;
    public int $leeftijd;
    public string $woonplaats;
    public int $login_idlogin;

    public function __construct(int $idklant = 0, string $Naam = '', int $leeftijd = 0, string $woonplaats = '', int $login_idlogin = 0)
    {
        $this->idklant = $idklant;
        $this->Naam = $Naam;
        $this->leeftijd = $leeftijd;
        $this->woonplaats = $woonplaats;
        $this->login_idlogin = $login_idlogin;
    }
}
