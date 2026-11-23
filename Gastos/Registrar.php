<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Listado de Gastos</title>
</head>
<body>
    <section>
        <h1>Registrar Gastos</h1>
        <form action="Registrar.php" method="POST">
            <label for="concepto">Concepto:</label>
            <input type="text" name="concepto" id="concepto" required><br><br>

        <label for="monto">Monto:</label>
        <input type="number" name="monto" id="monto" step="0.01" required><br><br>

     <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria" required>
            
            <option value="alimentacion">Alimentación</option>
            <option value="transporte">Transporte</option>
            <option value="entretenimiento">Entretenimiento</option>
            <option value="salud">Salud</option>
            <option value="profe">Educación</option>
            <option value="otros">Otros</option>
            </select><br><br>
        <label for="estado">Estado:</label>
        <select name="estado" id="estado" required>
            <option value="pendiente">Pendiente</option>
            <option value="pagado">Pagado</option>
            <required>
            <input type="submit" value="Registrar">
            </select><br><br>
                  
    </form>
    </section>
    <div>
        <a href="index.php">Volver al Inicio</a>
        <sectionon>
            <h2>Listado de Gastos</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("conexion.php");
                    $sql = "SELECT * FROM gastos";
                    $resultado = $conexion->query($sql);
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["concepto"] . "</td>";
                            echo "<td>" . $row["monto"] . "</td>";
                            echo "<td>" . $row["categoria"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No hay gastos registrados</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
    </div>
<body>
    
</body>
</html>