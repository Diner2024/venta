<?php
require_once('../model/categoriaModel.php');
$tipo  = $_REQUEST['tipo'];


$objCategoria = new CategoriaModel();

     if ($tipo == "listar") {

    $arr_Respuesta = array('status' => false, 'contenido' =>'');
    $arrCategorias = $objCategoria->obtenerCategorias();

    if (!empty($arrCategorias)) {
        //recorremos el array para agregar las opciones de la categoria
        for ($i=0; $i < count($arrCategorias); $i++) { 
            $id_categoria = $arrCategorias[$i]-> id;
            $nombre_categoria = $arrCategorias[$i]-> nombre;
            $opciones = '<a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
            $arrCategorias [$i] -> options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrCategorias;
    }
    echo json_encode($arr_Respuesta);
}
if ($tipo=="registrar"){
    //print_r($_POST);

   if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        if($nombre=="" || $detalle==""){
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios'); //respuesta

        }else {
            $arrCategoria = $objCategoria->registrarCategoria($nombre, $detalle);

            if ($arrCategoria->id>0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}


?>