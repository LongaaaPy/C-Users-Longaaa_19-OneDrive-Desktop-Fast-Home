<!DOCTYPE html>
<html>
<link rel="icon" href="../Views/icons/Imagen1.ico" />
<head>
  <title>Panel de Datos</title>
</head>
<body>
  <h1>Bienvenido Admin</h1>
  <p>Esta es la página del panel de datos. Aquí puedes ver y administrar la información importante.</p>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">rol</th>
      <th scope="col">nombre</th>
      <th scope="col">email</th>
      <th scope="col">contraseña</th>
      <th scope="col">fecha_reg</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>4</td>
      <td>cliente</td>
      <td>Juan David Longa Padilla</td>
      <td>longapadilla@gmail.com</td>
      <td>Moneda1234</td>
      <td>23/10/2023</td>
      <td>
<a href=""class="btn btn small btn warning"> 📋Editar</a>
<a href=""class="btn btn small btn danger">Eliminar🗑️</a>
      </td>
    </tr>
   
  </tbody>
</table>

  <button><a href="INICIO.php">VOLVER</a></button>

<style>
    /* Estilo general */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
  text-align: center;
}

/* Estilo del encabezado (h1) */
h1 {
  color: #007bff; /* Color azul para el título */
  font-size: 36px; /* Tamaño de fuente grande */
  margin-top: 50px; /* Espacio superior */
}

/* Estilo del párrafo (p) */
p {
  font-size: 18px; /* Tamaño de fuente más grande */
  color: #333; /* Color de texto más oscuro */
  margin: 20px; /* Márgenes para espaciar el párrafo */
}
/* Estilo general de la tabla */
.table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  font-family: Arial, sans-serif;
}

/* Estilo para las celdas de encabezado (th) */
th {
  background-color: #007bff; /* Fondo azul para las celdas de encabezado */
  color: #fff; /* Texto blanco en celdas de encabezado */
  font-weight: bold; /* Texto en negritas */
  padding: 8px; /* Espaciado interior */
}

/* Estilo para las celdas de datos (td) */
td {
  border: 1px solid #ddd; /* Borde en celdas de datos */
  padding: 8px; /* Espaciado interior */
}

/* Estilo para filas impares */
tr:nth-child(odd) {
  background-color: #f2f2f2; /* Fondo gris claro para filas impares */
}
    </style>

      
</body>
</html>
