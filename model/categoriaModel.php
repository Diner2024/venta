<?php
require_once "../libreria/conexcion.php";


class CategoriaModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    
    public function obtenerCategorias()
    {
        $arrRespuesta = [];
        $sql = $this->conexion->query("SELECT * FROM categoria");
        while ($fila = $sql->fetch_object()) {
            array_push($arrRespuesta, $fila);
        }
        return $arrRespuesta;
    }
    public function registrarCategoria($nombre, $detalle){

        $sql = $this->conexion->query("CALL insertcategoria('{$nombre}', '{$detalle}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtener_categorias_id($id){
        $respuesta = $this->conexion->query("SELECT * FROM categoria WHERE id = '{$id}'");
        $respuesta1 = $respuesta->fetch_object();
        return $respuesta1;  
    }
}
?>