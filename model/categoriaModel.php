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
    public function registrarCategoria($nombre, $detalle)
    {
        $nombre = $this->conexion->real_escape_string($nombre);
        $detalle = $this->conexion->real_escape_string($detalle);
        $sql = $this->conexion->query("CALL insertar_categoria('{$nombre}', '{$detalle}')");
        $result = $sql->fetch_object();
        return $result;
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
}
?>