<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

//instancio la clase modeloProducto
$objProducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();


if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');

    $arrProductos = $objProducto->obtener_Productos();
 

    if (!empty($arrProductos)) {
        ///recoremois el array para agegara las opciones  
    
        for ($i = 0; $i < count($arrProductos); $i++) {
            $id_categoria = $arrProductos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categorias_id($id_categoria);
            $arrProductos[$i]->categoria=$r_categoria;


            $id = $arrProductos[$i]->id;
            $codigo = $arrProductos[$i]->codigo;
            $nombre = $arrProductos[$i]->nombre;
            $detalle = $arrProductos[$i]->detalle;
            $precio = $arrProductos[$i]->precio;
            $stock = $arrProductos[$i]->stock;
            $id_categoria = $arrProductos[$i]->id_categoria;
            $imagen = $arrProductos[$i]->imagen;
            $id_proveedor = $arrProductos[$i]->id_proveedor;
            $opciones = '<a href="'.BASE_URL.'editarproducto/'.$id.'">Editar</a><button onclick="eliminar_producto('.$id.');">Eliminar</button>';
            $arrProductos[$i]->opciones = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrProductos;
    }

    echo json_encode($arr_Respuesta);
}


if ($tipo=="registrar"){
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];

  if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['idCategoria'];
        $imagen = 'Imagen';
        $proveedor = $_POST['idProveedor'];
        if($codigo=="" || $nombre=="" || $detalle=="" || $precio=="" || $stock=="" || $categoria=="" ||  $imagen=="" || $proveedor==""){
            //respuesta
            $arr_Respuesta = array('status'=>false,
            'mensaje'=>'Error, campos vacios'); 
        }else {
            //cargar archivos
            $archivo = $_FILES['imagen']['tmp_name'];
            $destino = '../assets/img_prodcutos/';
            $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor,$tipoArchivo);
            if ($arrProducto->id_n>0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
               $nombre = $arrProducto->id_n.".".$tipoArchivo;
               if (move_uploaded_file($archivo, $destino.''.$nombre)) {
            } else {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
            }

            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
if ($tipo=="ver"){
    //print_r($_POST);
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->verProducto
    ($id_producto);
    print_r($arr_Respuesta);
    //print_r($arr_respuesta);
    if(empty($arr_Respuesta)){
        $response = array('status'=>false, 'mensaje'=>"Error no hay informacion");
    }else {
        $arr_Respuesta = array('status' => true, 'mensaje' => "datos encontardos",'contenido'=> $arr_Respuesta);
    }
    echo json_encode($response);
}

if ($tipo=="actualizar"){
    //print_r($_POST);
}

if ($tipo=="aliminar"){
    //print_r($_POST);
}

?>