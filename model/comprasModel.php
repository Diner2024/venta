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
        if ($sql == false) {
            print_r(value: $this->conexion->error);
        }
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function obtener_productos(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM producto");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    //obtener compras
    public function obtener_compras(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM compras");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function verCompras($id){
        $sql = $this->conexion->query("SELECT * FROM compras WHERE id='{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
     }
     public function actualizarCompra($id, $id_producto, $cantidad, $precio, $id_trabajador){
        $sql = $this->conexion->query("CALL actualizarCompras('{$id}','{$id_producto }','{$cantidad}','{$precio}','{$id_trabajador}')");
        $sql = $sql->fetch_object();
      

}
?>