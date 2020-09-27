<?php

class Connection extends PDO
{

    private static $instancia;

    public function Connection($dns, $user, $pass)
    {
        parent::__construct($dns, $user, $pass);
    }

    public static function getInstancia($dbname, $host, $dbuser, $dbpassword)
    {
        if (!isset(self::$instancia)) {
            try {
                self::$instancia = new Connection(
                    "mysql:dbname=" . $dbname . ";host=" . $host,
                    $dbuser,
                    $dbpassword
                );
            } catch (Exception $e) {
                die('Erro ao conectar na base de dados');
            }
        }
        return self::$instancia;
    }
}
