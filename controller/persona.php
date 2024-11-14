<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloPersona
$objPersona = new PersonaModel();

if ($tipo=="registrar"){
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
    if($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo=="" || $departamento=="" || $provincia=="" ||  $distrito=="" || $cos_postal=="" || $direccion=="" || $rol=="" || $secure_password=="" || $estado=="" || $fecha_reg==""){
        $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios'); //respuesta
    }else {
        $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cos_postal, $direccion, $rol, $password, $estado, $fecha_reg);
    //
        if ($arrPersona->id_n>0) {
            $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');

        }else{
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar persona');
        }
    }
            echo json_encode($arr_Respuesta);

}
}

?>




