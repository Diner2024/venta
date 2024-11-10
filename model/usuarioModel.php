<?php
require_once "../libreria/conexion.php";

class UsuarioModel {

    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    // Método para registrar un usuario
    public function registrarUsuario(
        $numeroIdentidad, $razonSocial, $telefono, $correo, 
        $departamento, $provincia, $distrito, $codPostal, 
        $direccion, $rol, $password, $estado, $fechaReg
    ) {
        // Llamada al procedimiento almacenado para registrar usuario
        $sql = $this->conexion->query("CALL insertUsuario(
            '{$numeroIdentidad}', '{$razonSocial}', '{$telefono}', 
            '{$correo}', '{$departamento}', '{$provincia}', 
            '{$distrito}', '{$codPostal}', '{$direccion}', 
            '{$rol}', '{$password}', '{$estado}', '{$fechaReg}'
        )");

        $sql = $sql->fetch_object();
        return $sql;
    }
    
    // Método para actualizar información del usuario si se requiere
    public function actualizarUsuario($id, $telefono, $correo, $direccion, $estado) {
        $sql = $this->conexion->query("UPDATE usuario 
            SET telefono='{$telefono}', correo='{$correo}', 
            direccion='{$direccion}', estado='{$estado}' 
            WHERE id='{$id}'");
        return $sql;
    }
}
?>