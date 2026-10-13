<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Zona Administración</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <header>
    <h1>Zona Administración</h1>
    <p>Mensajes Recibidos</p>
    <a href="index.php" title="Regresar al portafolio"></a>
  </header>

  <section>
    <table>
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Mensaje</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ana</td>
          <td>ana@example.com</td>
          <td>Hola, me interesa tu portafolio.</td>
          <td>
            <a href="editar.php?id=1"></a>
            <a href="borrar.php?id=1"></a>
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
