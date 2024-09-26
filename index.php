<?php
session_start();

// Conexión a la base de datos (ajusta los datos)
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password,   
 $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);   

}

// Sanitizar datos
$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);   


// Consultar la base de datos
$sql = "SELECT * FROM usuarios WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();   

    // Verificar contraseña (usando password_verify)
    if (password_verify($password, $row["password"])) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("location: dashboard.php");
        exit;
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$conn->close();   

?>