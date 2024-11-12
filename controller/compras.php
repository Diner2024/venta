<?php
require_once('../model/comprasModel.php');
$tipo  = $_REQUEST['tipo'];

$objCompra = new CompraModel();

if ($tipo == "registrar") {
    if ($_POST) {
        $id_producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $id_trabajador = $_POST['trabajador'];

        if ($id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Campos vacíos');
        } else {
            $arrCompra = $objCompra->registrarCompra($id_producto, $cantidad, $precio, $id_trabajador);

            if ($arrCompra->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Compra registrada exitosamente');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar la compra');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}