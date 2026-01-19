<?php

class User
{
    public int $id;
    public string $username;
    public string $displayname;
    public string $passwordhash;

    public function __construct(int $id, string $username, string $displayname, string $passwordhash)
    {
        $this->id = $id;
        $this->username = $username;
        $this->displayname = $displayname;
        $this->passwordhash = $passwordhash;
    }

    public static function GetUserByName(string $username, $connection)
    {
        $stmt = $connection->prepare('SELECT id, username, displayname, passwordhash FROM users WHERE username = ?');
        if (!$stmt) return null;
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $res = $stmt->get_result();
        $row = $res->fetch_assoc();
        $stmt->close();
        
        if (!$row) return null;
        
        return new User(
            $row['id'],
            $row['username'],
            $row['displayname'],
            $row['passwordhash']
        );
    }
}
?>
