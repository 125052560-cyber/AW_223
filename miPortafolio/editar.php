<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Mensaje</title>
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
      margin: 5px;
      transition: background-color 0.3s ease;
    }

    header a:hover {
      background-color: #2E6E85;
    }

    form {
      background-color: #1B5C79;
      width: 90%;
      max-width: 600px;
      margin: 40px auto;
      padding: 25px;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    input, textarea {
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 1em;
      width: 100%;
      background-color: #2E6E85;
      color: #fff;
    }

    textarea {
      resize: none;
      height: 120px;
    }

    button {
      background-color: #27AE60;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 5px;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #1E8449;
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
    <p>Formulario para Editar</p>
    <a href="admin.php" title="Regresar a Admin">Volver a Admin</a>
    <a href="index.php" title="Regresar al Portafolio">Volver al Portafolio</a>
  </header>

  <form action="actualizar.php" method="POST">
    <label>Nombre</label>
    <input type="text" name="nombre" value="Ana">

    <label>Correo electrónico</label>
    <input type="email" name="correo" value="ana@example.com">

    <label>Mensaje</label>
    <textarea name="mensaje">Hola, me interesa tu portafolio.</textarea>

    <button type="submit">Actualizar Mensaje</button>
  </form>

  <footer>
    <p>© 2026 Mi Portafolio | Práctica de Programación Web</p>
  </footer>
</body>
</html>
