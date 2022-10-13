<?php
namespace Models;
require_once 'Model.php';
class Usuario extends Model{

    private static string $tabla = 'usuario';
    public string $username;
    public string $password;
    public string $name;

    /*
        Filtros
        $args = [
            'field'  => value,
            'field2' => value2
        ];

    */
    public static function Select($args = []){
        $conn = Self::getConexion();
        $tabla = self::$tabla;
        $query = "select * from {$tabla} where ";
        foreach($args as $field => $value){
            $query .= "{$field} = '{$value}' and ";
        }
       
        $query .= "1 = 1";
        $resultado = $conn->query($query);
        $usuarios = [];
        // mostrar resultado
        while ($row = $resultado->fetch_assoc()) {
           $user = new Usuario();
           $user->username = $row['username'];
           $user->password = $row['password'];
           $user->name     = $row['name'];
           $usuarios[]  = $user;
        }
        $resultado->close();
        return $usuarios;
    }

    /*
        Funcion para crear y editar
    */
    public function Save(){
        $conn = Self::getConexion();
        $tabla = self::$tabla;
        $query = "insert into {$tabla} values (?, ? , ?) on duplicate key update password=?, name=?";
        $stmt = $conn->prepare($query); 
        $stmt->bind_param("sssss", $this->username,$this->password,$this->name,$this->password,$this->name);
        $stmt->execute();
        $stmt->close();
    }
}