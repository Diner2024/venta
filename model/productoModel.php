<?php

use function PHPSTORM_META\sql_injection_subst;

require_once "../libreria/conexcion.php";
class ProductoModel{

    private $conexion;
    function __construct()
    {
        $this->conexion =  new Conexion();
        $this->conexion =  $this->conexion->connect();
    }
     

public function obtenerproductos(){
    $arrRespuesta = array();
    $respuesta = $this->conexion->query("SELECT * FROM producto");

    while ($objeto = $respuesta->fetch_object()) {
        array_push($arrRespuesta,$objeto);
    }
   return $arrRespuesta;
}

    public function registrarProducto($codigo, $nombre, $detalle, $precio,
     $stock, $categoria, $imagen, $proveedor,$tipoarchivo){
        $sql = $this->conexion->query("CALL insertproducto('{$codigo}',
'{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}',
        '{$imagen}','{$proveedor}','{$tipoarchivo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function actualizar_imagen($id,$imagen){
        $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' WHERE id='{$id}'");
    }
   
public function obtener_productos(){
    $arrRespuesta = array();
    $respuesta = $this->conexion->query("SELECT * FROM producto");

    while ($objeto = $respuesta->fetch_object()) {
        array_push($arrRespuesta,$objeto);
    }
   return $arrRespuesta;
}

public function obtener_productosId($id){
    $consulta = $this->conexion->query("SELECT * FROM producto WHERE id ='{$id}' ");
    $resultado = $consulta->fetch_object();
    return $resultado;
}
public function ver_Producto($id){
    $sql = $this->conexion->query("SELECT * FROM producto WHERE id='$id'");
    $sql = $sql->fetch_object();
    return $sql;
}
 
 //actualizar producto
 public function actualizarProducto($id, $nombre, $detalle, $precio, $idCategoria,$idProveedor){
    $sql = $this->conexion->query("CALL actualizarproducto('{$id}','{$nombre}','{$detalle}','{$precio}','{$idCategoria}','{$idProveedor}')");
    $sql = $sql->fetch_object();
    return $sql;
}
}
?>

