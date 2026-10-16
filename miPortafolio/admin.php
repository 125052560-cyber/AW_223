<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Zona Administración</title>
  <link rel="stylesheet" href="estilos.css">
  <style>
    body {
      background-color: #0A3D62;
      color: #F5F5F5;
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #1B5C79;
      text-align: center;
      padding: 30px 0;
    }

    header h1 {
      font-size: 2em;
      margin-bottom: 10px;
    }

    header p {
      font-style: italic;
      margin-bottom: 15px;
    }

    header a {
      display: inline-block;
      background-color: #3B8EA5;
      color: #fff;
      text-decoration: none;
      padding: 8px 15px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    header a:hover {
      background-color: #2E6E85;
    }

    section {
      margin: 40px auto;
      width: 90%;
      max-width: 900px;
      background-color: #1B5C79;
      padding: 20px;
      border-radius: 10px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #3B8EA5;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #2E6E85;
    }

    a[href*="editar"], a[href*="borrar"] {
      display: inline-block;
      padding: 6px 10px;
      border-radius: 5px;
      text-decoration: none;
      color: #fff;
      margin-right: 5px;
    }

    a[href*="editar"] {
      background-color: #27AE60;
    }

    a[href*="borrar"] {
      background-color: #E74C3C;
    }

    a[href*="editar"]:hover {
      background-color: #1E8449;
    }

    a[href*="borrar"]:hover {
      background-color: #C0392B;
    }

    footer {
      text-align: center;
      background-color: #1B5C79;
      padding: 15px 0;
      font-size: 0.9em;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Zona Administración</h1>
    <p>Mensajes Recibidos</p>
    <a href="index.php" title="Regresar al portafolio">Volver al Portafolio</a>
  </header>

  <section>
    <table>
     <thead>
  <tr>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Mensaje</th>
    <th>Fecha</th>
    <th>Opciones</th>
  </tr>
</thead>
<tbody>
  <?php
  require "consulta_mensajes.php";
  $rsMensajes = consultaMensajes();
  while($arrMensaje = mysqli_fetch_array($rsMensajes)){
    echo "<tr>
            <td>".$arrMensaje['nombre']."</td>
            <td>".$arrMensaje['correo']."</td>
            <td>".$arrMensaje['mensaje']."</td>
            <td>".$arrMensaje['timeStaps']."</td>
            <td>
              <a href='editar.php?id=".$arrMensaje['id']."'>Editar</a>
              <a href='borrar.php?id=".$arrMensaje['id']."'>Borrar</a>
            </td>
          </tr>";
  }
  ?>
</tbody>

        <tr>
          <td>1</td>
          <td>Ana</td>
          <td>ana@example.com</td>
          <td>Hola, me interesa tu portafolio.</td>
          <td>
            <a href="editar.php">Editar</a>
          </td>
        </tr>
      </tbody>
    </table>
  </section>

  <footer>
    <p>© 2026 Mi Portafolio | Práctica de Programación Web</p>
  </footer>
</body>
</html>
