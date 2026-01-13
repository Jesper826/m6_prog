<?php
// Dataclass for `login` table

require_once __DIR__ . '/../database.php';

class Login
{
    public int $idlogin;
    public string $username;
    public string $password;

    public function __construct(int $idlogin = 0, string $username = '', string $password = '')
    {
        $this->idlogin = $idlogin;
        $this->username = $username;
        $this->password = $password;
    }
}
