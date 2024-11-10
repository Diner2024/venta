<?php
require_once('../model/UsuarioModel.php');
$tipo = $_REQUEST['tipo'];

// Instanciar la clase UsuarioModel
$objUsuario = new UsuarioModel();

if ($tipo == "registrar") {
    if ($_POST) {
        // Capturar los datos del formulario
        $numeroIdentidad = $_POST['numeroIdentidad'];
        $razonSocial = $_POST['razonSocial'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $codPostal = $_POST['codPostal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        $fechaReg = $_POST['fechaReg'];

        // Validar que no haya campos vacíos
        if (empty($numeroIdentidad) || empty($razonSocial) || empty($correo) || empty($departamento) ||
            empty($provincia) || empty($distrito) || empty($codPostal) || empty($direccion) ||
            empty($rol) || empty($password) || empty($estado) || empty($fechaReg)) {

            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos'); // Respuesta
        } else {
            // Registrar el usuario
            $arrUsuario = $objUsuario->registrarUsuario($numeroIdentidad, $razonSocial, $telefono, $correo, $departamento,
                                                        $provincia, $distrito, $codPostal, $direccion, $rol, $password,
                                                        $estado, $fechaReg);

            if ($arrUsuario->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar usuario');
            }
        }

        // Enviar respuesta en formato JSON
        echo json_encode($arr_Respuesta);
    }
}
?>