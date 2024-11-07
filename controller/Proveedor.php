<?php
require_once('../model/proveedorModel.php');
$tipo = $_REQUEST['tipo'];

//instanciar la categoria model
$objProveedor = new proveedorModel();

if($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Proveedor = $objProveedor->obtener_proveedores();
if (!empty($arr_Proveedor)) {
    //recordemos que el array es para agregar las opciones de las categorias
    for ($i=0; $i < count($arr_Proveedor); $i++) { 
        $id_categoria = $arr_Proveedor[$i]->id;
        $categoria = $arr_Proveedor[$i]->razon_social;
        $opciones = '<a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
        $arr_Proveedor[$i]->options = $opciones;
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Proveedor;
}

    echo json_encode($arr_Respuesta);
}
?>