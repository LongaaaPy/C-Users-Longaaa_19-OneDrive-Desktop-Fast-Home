<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cambiar Contraseña</title>
    <link rel="stylesheet" type="text/css" href="../Views/css/sesion.css">
</head>
<body>
    <h2>Cambiar Contraseña</h2>
    <form action="change_password.php" method="post">
        <label for="current_password">Contraseña Actual:</label>
        <input type="password" name="current_password" required>
        <label for="new_password">Nueva Contraseña:</label>
        <input type="password" name="new_password" required>
        <input type="submit" value="Enviar a los Administradores">
        <button><a href="iniciosesion.php">Volver</button>
    </form>
</body>
</html>

<style>

button{
    margin:  10px  90px;
    padding:5px 5px;
}

    </style>