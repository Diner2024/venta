<?php
require_once('../model/categoriaModel.php');
$tipo  = $_REQUEST['tipo'];


$objCategoria = new CategoriaModel();

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrCategorias = $objCategoria->obtenerCategorias();
    
    if (!empty($arrCategorias)) {
        // Recorremos el array para agregar las opciones de la categoria
        for ($i = 0; $i < count($arrCategorias); $i++) {
            $id_categoria = $arrCategorias[$i]->id;
            $nombre_categoria = $arrCategorias[$i]->nombre;
            $detalle = $arrCategorias[$i]->detalle;
            
            // Corrected the options generation
            $opciones = 
                '<a href="'.BASE_URL.'editarcategoria/'.$id_categoria.'" class="btn btn-info btn-sm">
                    <i class="fas fa-edit"></i> EDITAR CATEGORIA
                </a>
                <button onclick="eliminar_categoria('.$id_categoria.');" class="btn btn-danger btn-sm">
                    ELIMINAR CATEGORIA <i class="fas fa-trash-alt"></i>
                </button>';
            
            // Corrected array assignment
            $arrCategorias[$i]->options = $opciones;
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


if($tipo == "ver") {
    //print_r($_POST);
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->verCategoria($id_categoria);
   // print_r($arr_Respuesta);
   if (empty($arr_Respuesta)) {
       $response = array('status' => false, 'mensaje' => "ErroR¡¡ no hay informacion");
   }else{
    $response = array('status' => true, 'mensaje'=>"datos encontrados", 'contenido' => $arr_Respuesta);
   }
   echo json_encode($response);
}

if ($tipo == "actualizar") {
    // Obtener los datos del formulario
    $id_categoria = $_POST['id_categoria'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];

    if ($id_categoria == "" || $nombre == "" || $detalle == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta

    } else {
        $arrCategoria = $objCategoria->actualizarCategoria($id_categoria, $nombre, $detalle);
        if ($arrCategoria->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar categoria');
        }
    }
    echo json_encode($arr_Respuesta);
}


if ($tipo == "eliminar") {
    //print_r($_POST);
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->eliminar_categoria($id_categoria);
    //print_r($arr_Respuesta);
    if (empty($arr_Respuesta)) {
        $response = array('status' => false);
    } else {
        $response = array('status' => true);
    }
    echo json_encode($response);
}
?>