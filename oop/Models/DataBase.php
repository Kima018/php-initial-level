<?php
class DataBase
{
    const HOST = "localhost";
    const DB_USER = "root";
    const DB_password = "";
    const DB_NAME = "test_baza";
    public mixed $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect(self::HOST,self::DB_USER,self::DB_password,self::DB_NAME);
    }
}

