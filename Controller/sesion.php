<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexion = new mysqli("localhost", "root", "", "registro");

    // Verifica si la conexión a la base de datos tuvo éxito
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Obtiene los datos del formulario
    $name = $_POST['name'];
    $pass = $_POST['password'];

    // Realiza la consulta para verificar las credenciales del usuario (ajusta la consulta según tu esquema de base de datos)
    $consulta = "SELECT * FROM  datos WHERE nombre = '$name' AND password = '$pass'";
    $resultado = $conexion->query($consulta);

    // Verifica si se encontró un usuario con las credenciales proporcionadas
    if ($resultado->num_rows == 1) {
        // Inicio de sesión exitoso, redirige al usuario a la página de inicio
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $rol = isset($_POST['rol']) ? $_POST['rol'] : '';
            
            if ($rol === 'cliente') {
                // Redirigir al apartado de clientes
                header('Location:../Model/INICIO.php');
                exit();
            } elseif ($rol === 'domiciliario') {
                // Redirigir al apartado de domiciliarios
                header('Location:../Model/inicio dos.php');
                exit();
            }
        }
    
    } else {
        // Credenciales incorrectas, muestra un mensaje de error
        echo "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
}
?>
