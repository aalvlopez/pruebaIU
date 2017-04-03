<?php

class PDOConnection
{
    const DRIVER = "mysql";
    const HOST = "localhost";
    const DBNAME = "iuprueba";
    const PORT = 3306;
    const USER = "root";
    const PASSWORD = "";

    /**
     * @return PDO
     */
    public static function getConnection()
    {
        return new PDO(self::DRIVER . ":host=" . self::HOST . ";dbname=" . self::DBNAME . ";port=" . self::PORT,
            self::USER, self::PASSWORD);
    }
}