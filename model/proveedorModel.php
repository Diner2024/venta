<?php 

require_once "../libreria/conexcion.php"; 

class proveedorModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this-> conexion = $this->conexion->connect();
    }
    public function obtener_proveedores(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'proveedor'");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
    
}
?>