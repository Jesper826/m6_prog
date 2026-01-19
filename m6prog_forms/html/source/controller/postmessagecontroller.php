<?php
require_once __DIR__ . '/../dataclasses/user.php';

class PostMessageController
{
    public function handlePost()
    {
 
        $name = $_POST['name'] ?? '';
        $bericht = $_POST['bericht'] ?? '';

        $user = new User(0, $name, $bericht);
        $user->insert();
        header("location:  "  . $_SERVER['PHP_SELF']);
        exit();
    }
}