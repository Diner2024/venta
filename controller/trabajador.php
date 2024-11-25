<?php
    require_once('../model/personaModel.php');
    $tipo = $_REQUEST['tipo'];

//instanciar la categoria model
$objTrabajador = new PersonaModel();

if($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Trabajador = $objTrabajador->obtener_trabajadores();
if (!empty($arr_Trabajador)) {
    //recordemos que el array es para agregar las opciones de las categorias
    for ($i=0; $i < count($arr_Trabajador); $i++) { 
        $idTrabajador = $arr_Trabajador[$i]->id;
        $razon_social = $arr_Trabajador[$i]->razon_social;
        $opciones = '';
        $arr_Trabajador[$i]->options = $opciones;
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Trabajador;
}

    echo json_encode($arr_Respuesta);
}
?>