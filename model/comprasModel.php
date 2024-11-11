<?php
require_once "../librerias/conexion.php";

class comprasModel {

    private $conexion;
    
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    // Método para registrar una compra
    public function registrarCompras($id_producto, $cantidad, $precio, $fecha_compra, $id_trabajador) {
        $sql = $this->conexion->query("CALL insertCompras('{$id_producto}', '{$cantidad}', '{$precio}', '{$fecha_compra}', '{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}

?>