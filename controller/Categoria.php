<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];

//instanciar la clase categoria  model
$objCategoria = new categoriaModel();


if ($tipo=="Listar"){
    //respuesta
    $arr_Respuesta = array ('status'==false, 'contenido'=>'');
    $arr_Categorias = $objCategoria->obtener_categoria();

    print_r($arr_Categorias);
}
?>