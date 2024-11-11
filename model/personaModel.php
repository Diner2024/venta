<?php
class PersonaModel {
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=sistema_ventas;charset=utf8', 'root', ''); // Cambia los datos de conexión
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error de conexión: ' . $e->getMessage());
        }
    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cos_postal, $direccion, $rol, $password, $estado, $fecha_reg) {
        try {
            $sql = "INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, cod_postal, direccion, rol, password, estado, fecha_reg)
                    VALUES (:nro_identidad, :razon_social, :telefono, :correo, :departamento, :provincia, :distrito, :cos_postal, :direccion, :rol, :password, :estado, :fecha_reg)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                ':nro_identidad' => $nro_identidad,
                ':razon_social' => $razon_social,
                ':telefono' => $telefono,
                ':correo' => $correo,
                ':departamento' => $departamento,
                ':provincia' => $provincia,
                ':distrito' => $distrito,
                ':cos_postal' => $cos_postal,
                ':direccion' => $direccion,
                ':rol' => $rol,
                ':password' => password_hash($password, PASSWORD_DEFAULT), // Asegurar la contraseña
                ':estado' => $estado,
                ':fecha_reg' => $fecha_reg
            ]);
            return ['status' => true, 'mensaje' => 'Registro exitoso'];
        } catch (PDOException $e) {
            return ['status' => false, 'mensaje' => 'Error: ' . $e->getMessage()];
        }
    }

    // Puedes agregar más métodos para listar, editar, etc.
}
?>