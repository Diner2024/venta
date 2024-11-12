<?php
require_once('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloProducto
$objProducto = new ProductoModel();

if ($tipo=="registrar"){
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];

    
  if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen = 'Imagen';
        $proveedor = $_POST['proveedor'];
        if($codigo=="" || $nombre=="" || $detalle=="" || $precio=="" || $stock=="" || $categoria=="" ||  $imagen=="" || $proveedor==""){
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios'); //respuesta

        }else {
            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor);

            if ($arrProducto->id>0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
                //cargar archivo
               $archivo = $_FILES['imagen']['tmp_name'];
               $destino = './assets/img_productos/';
               $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

               $nombre = $arrProducto->id.".".$tipoArchivo;

               if (move_uploaded_file($archivo.$destino,$nombr)) {
                $arr_imagen = $objProducto->actualizar_imagen($id,$nombre);
               }else{
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso al subir imagen');
               }


            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}else if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');

    $arrProductos = $objProducto->obtenerProductos();

    if (!empty($arrProductos)) {
        for ($i = 0; $i < count($arrProductos); $i++) {
            $id = $arrProductos[$i]->id;
            $nombre = $arrProductos[$i]->nombre;
            $nombre = $arrProductos[$i]->nombre;
            $detalle = $arrProductos[$i]->detalle;
            $precio = $arrProductos[$i]->precio;
            $stock = $arrProductos[$i]->stock;
            $id_categoria = $arrProductos[$i]->id_categoria;
            $imagen = $arrProductos[$i]->imagen;
            $id_proveedor = $arrProductos[$i]->id_proveedor;
            

            $opciones = '<a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
            $arrProductos [$i] -> options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrProductos;
    }

    echo json_encode($arr_Respuesta);
}
?>