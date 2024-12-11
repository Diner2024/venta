<?php
require_once('../model/comprasModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');

$tipo  = $_REQUEST['tipo'];

$objCompra = new CompraModel();
$objProducto = new ProductoModel();
$objPersona = new PersonaModel();

//listar compras
if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' =>'');
    $arrCompras = $objCompra->obtener_compras();

    if (!empty($arrCompras)) {

        //recorremos el array para agregar las opciones de la categoria
        for ($i=0; $i < count($arrCompras); $i++) { 
            $id_compra = $arrCompras[$i]->id;

            $id_producto = $arrCompras[$i]->id_producto;
            $r_producto = $objProducto->obtener_productosId($id_producto);
            $arrCompras[$i]->producto = $r_producto;


            $cantidad = $arrCompras[$i]->cantidad;
            $precio = $arrCompras[$i]->precio;

            $id_trabajador = $arrCompras[$i]->id_trabajador;
            $r_usuario = $objPersona->obtener_trabajador_id($id_trabajador);
            $arrCompras[$i]->usuario = $r_usuario;

            $opciones = '<button class="btn btn-primary btn-sm">editar<i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt">eliminar</i></button>';
            $arrCompras [$i] ->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrCompras;
    }
    echo json_encode($arr_Respuesta);
}


//registrar compras
if ($tipo == "registrar") {
    if ($_POST) {
        $id_producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $id_trabajador = $_POST['trabajador'];

        if ($id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Campos vacíos');
        }  else {
            $arrProducto = $objCompra->registrarcompra(
                $id_producto,
                $cantidad,
                $precio,
                $id_trabajador
            );

            if ($arrProducto->id>0) {
            $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');

        }else{
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar persona');
        }
    }
            echo json_encode($arr_Respuesta);

}

if($tipo == "ver") {
    //print_r($_POST);
    $id_compra = $_POST['id_compra'];
    $arr_Respuesta = $objCompras->verCompras($id_compra);
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
    $id_compra = $_POST['id_compra'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id_trabajador = $_POST['trabajador'];

    if ($id_compra == "" || $id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta

    } else {
        $arrCompras = $objCompras->actualizarCompra($id_compra, $id_producto, $cantidad, $precio, $id_trabajador);
        if ($arrCompras->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar compras');
        }
    }
    echo json_encode($arr_Respuesta);
}
}
?>