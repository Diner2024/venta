<?php
require_once("../model/personaModel.php");
$objPersona = new PersonaModel();
$tipo = $_GET['tipo'];

if ($tipo=="iniciar_sesion") {
   // print_r($_POST);
   $usuario = trim($_POST['usuario']);
   $password = trim($_POST['password']);
   $arrResponse = array('status'=> false, 'msg'=>'');

   $arrPersona = $objPersona->buscarPersonaPorDNI($usuario);
      // print_r($arrPersona);
      if (empty($arrPersona)){
        $arrResponse = array('status'=> false, 'msg'=>'Error,
        Usuario no existe registrado en el sistema');
      }else{
        if (password_verify($password, $arrPersona->password)) {
            session_start();
            $_SESSION['session_ventas_id'] = $arrPersona->id;
            $_SESSION['session_ventas_dni'] = $arrPersona->nro_identidad;
            $_SESSION['session_ventas_nombre'] = $arrPersona->razon_social;
            $arrResponse = array('status'=> true, 'msg'=>'Ingresar
            al Sistema');
        }else{
            $arrResponse = array('status'=> true, 'msg'=>'Error
            Contraseña Incorrecta');
        }
      }
      echo json_encode($arrResponse);
}
if ($tipo == "cerrar_sesion") {
    session_start();
    session_unset();
    session_destroy();
    $arrResponse = array('status' => true);
    echo json_encode($arrResponse);
}
die;
?>