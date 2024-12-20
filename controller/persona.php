<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloPersona
$objPersona = new PersonaModel();

if ($tipo == "registrar") {
    //print_r($_POST);
    if ($_POST) {
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cos_postal = $_POST['cos_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        // Asegúrate de usar la variable correcta para la contraseña
        $password = $_POST['password']; // Cambiado de $dni a $password
        $secure_password = password_hash($password, PASSWORD_DEFAULT); // Hasheando la contraseña

        $estado = $_POST['estado'];
        $fecha_reg = $_POST['fecha_reg'];
        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" ||  $distrito == "" || $cos_postal == "" || $direccion == "" || $rol == "" || $password == "" || $estado == "" || $fecha_reg == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta
        } else {
            $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cos_postal, $direccion, $rol, $secure_password, $estado, $fecha_reg);
            //
            if ($arrPersona->id_n > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}

//listar persona
if ($tipo == "listar_personas") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrPersona = $objPersona->obtenerPersona();

    if (!empty($arrPersona)) {
        for ($i = 0; $i < count($arrPersona); $i++) {

            $id_persona =  $arrPersona[$i]->id;
            $nro_identidad =  $arrPersona[$i]->nro_identidad;
            $razon_social =  $arrPersona[$i]->razon_social;
            $telefono =  $arrPersona[$i]->telefono;
            $correo =  $arrPersona[$i]->correo;
            $departamento =  $arrPersona[$i]->departamento;
            $cod_postal =  $arrPersona[$i]->cod_postal;
            $direccion =  $arrPersona[$i]->direccion;
            $rol =  $arrPersona[$i]->rol;
            //$opciones = '<a href="'.BASE_URL.'editarpersona/'.$id_persona.'">Editar</a><button onclick="eliminar_producto('.$id_persona.');">Eliminar</button>';
           // $arrPersona[$i]->opciones = $opciones;
           
           $opciones = '
           <a href="'.BASE_URL.'editarpersona/'.$id_persona.'" class="btn btn-warning btn-sm">
               <i class="fas fa-edit"></i> EDITAR
           </a>
           <button onclick="eliminar_persona('.$id_persona.');" class="btn btn-danger btn-sm">
               <i class="fas fa-trash-alt"></i> ELIMINAR
           </button>
       ';
       $arrPersona[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] =  $arrPersona;
    }
    echo json_encode($arr_Respuesta); //convertir en formato -- 
}

//listar proveedor
if ($tipo=="listarProveedor") {
    $arr_respuesta = array('status'=>false,'contenido'=>'');
    $arr_proveedor =  $objPersona->obtener_proveedores();

    if (!empty($arr_proveedor)) {
        
        for ($i=0; $i < count($arr_proveedor); $i++) { 
            $id = $arr_proveedor[$i]->id;
            $persona = $arr_proveedor[$i]->razon_social;
            $opciones = '';
            $arr_proveedor[$i]->options = $opciones;
        }
        $arr_respuesta['status'] = true;
        $arr_respuesta['contenido'] = $arr_proveedor;
    }
    //$arr_respuesta['contenido']=$arr_proveedor;
    echo json_encode($arr_respuesta);

}


//obtener_trabajadores
if ($tipo=="listarTrabajador") {
    $arr_respuesta = array('status'=>false,'contenido'=>'');
    $arr_Trabajador =  $objPersona->obtener_trabajadores();

    if (!empty($arr_Trabajador)) {
        
        for ($i=0; $i < count($arr_Trabajador); $i++) { 
            $rol_persona = $arr_Trabajador[$i]->rol;
            $persona = $arr_Trabajador[$i]->razon_social;
            $opciones = '';
            $arr_Trabajador[$i]->options = $opciones;
        }
        $arr_respuesta['status'] = true;
        $arr_respuesta['contenido'] = $arr_Trabajador;
    }
    //$arr_respuesta['contenido']=$arr_proveedor;
    echo json_encode($arr_respuesta);

}



if($tipo == "ver") {
    //print_r($_POST);
    $id_persona = $_POST['id_persona'];
    $arr_Respuesta = $objPersona->verPersona($id_persona);
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
    $id_persona = $_POST['id_persona'];
    $nro_identidad = $_POST['nro_identidad'];
    $razon_social = $_POST['razon_social'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $cod_postal = $_POST['cod_postal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];

    if ($id_persona == "" || $nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" 
    || $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta

    } else {
        $arrPersona = $objPersona->actualizarPersona($id_persona, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia,
    $distrito, $cod_postal, $direccion, $rol);
        if ($arrPersona->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar PERSONA');
        }
    }
    echo json_encode($arr_Respuesta);


    if ($tipo == "eliminar") {
        //print_r($_POST);
        $id_persona = $_POST['id_persona'];
        $arr_Respuesta = $objPersona->eliminar_persona($id_persona);
        //print_r($arr_Respuesta);
        if (empty($arr_Respuesta)) {
            $response = array('status' => false);
        } else {
            $response = array('status' => true);
        }
        echo json_encode($response);
    }
}    
?>