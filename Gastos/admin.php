<section>
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
                    echo "<td>" . $row["estado"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay gastos registrados</td></tr>";
            }
            ?>
        </tbody>