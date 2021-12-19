<?php

class DBAuth
{
    private $dbc;

    public function __construct
    (
        $db_host = 'localhost',
        $db_user = 'vadimb',
        $db_password = 'root4321',
        $db_name = 'bogdanovich'
    )
    {
        $this->dbc = new PDO
        (
            "mysql:host=$db_host;dbname=$db_name",
            $db_user,
            $db_password
        );
    }

    public function authTry($login, $password): bool {
        $query = "SELECT login, password FROM users WHERE login = '$login'";
        $query_res = $this->dbc->query($query);
        $row = $query_res->fetch(PDO::FETCH_ASSOC);
        return ($row['password'] == $password);
    }

    public function checkUserExistence($login): bool {
        $query = "SELECT login FROM users";
        $query_res = $this->dbc->query($query);
        $logins_arr = $query_res->fetchAll(PDO::FETCH_COLUMN, 0);
        return in_array($login, $logins_arr);
    }

    public function addUser($login, $password) {
        $query = "INSERT INTO users VALUES (NULL, '$login', SHA1('$password'))";
        return $this->dbc->query($query);
    }
}