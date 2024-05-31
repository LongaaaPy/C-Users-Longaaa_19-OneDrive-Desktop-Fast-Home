<!DOCTYPE html>
<html>
<link rel="icon" href="../Views/icons/Imagen1.ico" />
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Views/css/registro.css">
</head>
<body>
    <form method="post">
    	<h1>¡Registrate!</h1>

        <p> selecciona el rol que te guataria ejercer!</p>
        <input type="radio" name="rol" value="cliente" id="cliente"><label for="cliente">Quiero ser Cliente</label><br>
        <input type="radio" name="rol" value="domiciliario" id="domiciliario"><label for="domiciliario">Quiero ser Domiciliario</label><br>

    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" name="register">
        
    </form>
        <?php 
        include("registrar.php");
        ?>
        <button><a href="iniciosesion.php">Siguiente ->></button>
</body>
</html>