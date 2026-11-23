<html>
<head>
    <title>Solicitud de Gastos</title>
</head>
<body>
    <section>
        <h1>Solicitud de Gastos</h1>
        <form action="solicitud.php" method="POST">
            <label for="concepto">Concepto:</label>
            <input type="text" name="concepto" id="concepto" required><br><br>
            <label for="monto">Monto:</label>
            <input type="number" name="monto" id="monto" step="0.01" required><br><br>
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" required>
                <option value="pendiente">Pendiente</option>
                <option value="pagado">Pagado</option>
            </select><br><br>
            <input type="submit" value="Solicitar">
        </form>
    </section>
</body>
</html>