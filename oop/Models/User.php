<?php
class User
{
    public string $username;
    public string $password;

    public function __construct($username,$password)
    {
        $this->username=$username;
        $this->password=$password;
    }

    public function saveUser()
    {
        $db = mysqli_connect("localhost", "root","","test_baza");
        $username = $db->real_escape_string($this->username);
        $password = $db->real_escape_string($this->password);

        $db->query("INSERT INTO user (username,password) VALUES ('$username','$password')");

    }

}
