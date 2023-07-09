
<?php
$servername = "localhost"; // Cambia esto si tu servidor de base de datos no está en tu localhost
$username = "root"; // Reemplaza "tu_usuario" con tu nombre de usuario de MySQL
$password = ""; // Reemplaza "tu_contraseña" con tu contraseña de MySQL
$database = "registro"; // Reemplaza "tu_base_de_datos" con el nombre de tu base de datos en PhpMyAdmin

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}



// Cerrar conexión
$conn->close();
?>
