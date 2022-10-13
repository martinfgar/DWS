<?php
namespace Models;
class Model{
    private static string $hostname = "localhost";
    private static string $database = "mvc";
    private static string $dbUser = "root";
    private static string $dbPass = "root";
    
    public static function getConexion(){
        return new \mysqli(self::$hostname,self::$dbUser,self::$dbPass,self::$database);
    }
}
    
    