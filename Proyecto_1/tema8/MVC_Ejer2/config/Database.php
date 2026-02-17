<?php
namespace config;
class Database
{
    public static function conectar()
    {
        $mysqli = new \mysqli("localhost", "root", "", "gestion_tareas");
        $mysqli->set_charset("utf8");

        return $mysqli;
    }

}
