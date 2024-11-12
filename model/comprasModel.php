<?php
require_once "../libreria/conexcion.php";

class CompraModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarcompra($producto, $cantidad, $precio, $trabajador) {
        $sql = $this->conexion->query("CALL insertcompras('{$producto}', '{$cantidad}', '{$precio}', '{$trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
?>