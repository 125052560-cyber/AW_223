<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos</title>
</head>
<section>
    <h1>Registrar Gastos</h1>
    <form action="Registrar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="monto">Monto:</label>
        <input type="number" name="monto" id="monto" required><br><br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required><br><br>
        <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria" required>
            <option value="alimentacion">Alimentación</option>
            <option value="transporte">Transporte</option>
            <option value="entretenimiento">Entretenimiento</option>
            <option value="salud">Salud</option>
            <option value="educacion">Educación</option>
            <option value="otros">Otros</option>

        <input type="submit" value="Registrar">
    </form>

<body>
    
</body>
</html>