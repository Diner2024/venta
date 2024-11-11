<?php
require_once('../model/personaModel.php');

$tipo = $_GET['tipo'] ?? '';

switch ($tipo) {
    case 'registrar':
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
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        $fecha_reg = $_POST['fecha_reg'];

        $personaModel = new PersonaModel();
        $resultado = $personaModel->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cos_postal, $direccion, $rol, $password, $estado, $fecha_reg);

        echo json_encode($resultado);
        break;

    // Otros casos como listar, editar, etc. pueden ir aquí
}
?>