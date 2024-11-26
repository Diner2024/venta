<?php
require_once "../libreria/conexcion.php";

class PersonaModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this-> conexion = $this->conexion->connect();
    }
    
    public function registrarPersona($nro_identidad,$razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cos_postal, $direccion,$rol,$password,$estado,$fecha_reg){
        $sql = $this->conexion->query("CALL insertpersona('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$cos_postal}','{$direccion}','{$rol}','{$password}','{$estado}','{$fecha_reg}')");
        $sql = $sql->fetch_object();
        return $sql;
     }
<<<<<<< HEAD

     //buscar persona por dni
=======
>>>>>>> 1fa85da269eca86cb10af28c069463582cfb075e
     
     public function buscarPersonaPorDNI($nro_identidad){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE 
        nro_identidad ='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    
<<<<<<< HEAD
    //obtener persona
    public function obtenerPersona(){
    $arrRespuesta = array();
    $respuesta = $this->conexion->query("SELECT * FROM persona");
    while ($objeto = $respuesta->fetch_object()) {
        array_push($arrRespuesta,$objeto);
        
    }
    return $arrRespuesta;
}
=======
    
    public function obtenerPersona(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
            
        }
        return $arrRespuesta;
    }
>>>>>>> 1fa85da269eca86cb10af28c069463582cfb075e
     //listar proveedores
     public function obtener_proveedores(){
        $arrRespuestaa = array();
        $respuestaa = $this->conexion->query("SELECT * FROM persona WHERE Rol = 'proveedor'");

        while ($objeto = $respuestaa->fetch_object()) {
            array_push($arrRespuestaa,$objeto);
        }
        return $arrRespuestaa;
    }

<<<<<<< HEAD

//listar proveedores por id
public function obtener_proveedor_id($id){
    $respuesta = $this->conexion->query("SELECT *FROM persona WHERE id='{$id}'");
    $objeto = $respuesta->fetch_object();
    return $objeto;
}
=======
//obtener proveedor por id
    public function obtener_proveedor_id($id){
        $respuesta = $this->conexion->query("SELECT *FROM persona WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
>>>>>>> 1fa85da269eca86cb10af28c069463582cfb075e

    //listar trabajaadores
    public function obtener_trabajadores(){
        $arrRespuesta1 = array();
        $respuesta1 = $this->conexion->query("SELECT * FROM persona WHERE rol = 'trabajador'");
        while ($objeto1 = $respuesta1->fetch_object()) {
            array_push($arrRespuesta1,$objeto1);
        }
        return $arrRespuesta1;
    }
<<<<<<< HEAD
//listar trabajaadores por id
    public function obtener_trabajador_id($id){
        $respuesta = $this->conexion->query("SELECT *FROM persona WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
=======

    
    
>>>>>>> 1fa85da269eca86cb10af28c069463582cfb075e
   
}
?>
