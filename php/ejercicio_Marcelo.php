<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicación Entradas de Cine</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; line-height: 1.6; }
        .card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; max-width: 400px; }
        .result { margin-top: 20px; padding: 15px; background-color: #f4f4f4; border-radius: 5px; }
        label { display: block; margin-top: 10px; }
        input, select { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; }
        button { margin-top: 15px; padding: 10px; width: 100%; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

<div class="card">
    <h2>Aplicación Entradas de Cine</h2>
    <form method="POST">
        <label for="dia">Día de la semana:</label>
        <select name="dia" id="dia" required>
            <option value="lunes">Lunes</option>
            <option value="martes">Martes</option>
            <option value="miercoles">Miércoles</option>
            <option value="jueves">Jueves</option>
            <option value="viernes">Viernes</option>
            <option value="sabado">Sábado</option>
            <option value="domingo">Domingo</option>
        </select>

        <label for="general">Entradas generales:</label>
        <input type="number" name="general" id="general" min="0" value="0" required>

        <label for="ninos">Entradas de niños:</label>
        <input type="number" name="ninos" id="ninos" min="0" value="0" required>

        <button type="submit">Calcular Total</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $DiaSemanal = strtolower($_POST['dia'] ?? '');
        $EntradasCompradas = (int)($_POST['general'] ?? 0);
        $EntradasCompradasNinos = (int)($_POST['ninos'] ?? 0);

        // Precios por defecto
        $PrecioGeneral = 0;
        $PrecioNinos = 0;

        // Evaluación del día ingresado por el usuario
        if ($DiaSemanal === "lunes") {
            $PrecioGeneral = 9;
            $PrecioNinos = 7;
        } elseif ($DiaSemanal === "martes") {
            $PrecioGeneral = 7;
            $PrecioNinos = 7;
        } elseif (in_array($DiaSemanal, ["miercoles", "miércoles", "jueves", "viernes"])) {
            $PrecioGeneral = 10;
            $PrecioNinos = 8;
        } elseif (in_array($DiaSemanal, ["sabado", "sábado", "domingo"])) {
            $PrecioGeneral = 12;
            $PrecioNinos = 9;
        }

        $SubTotal = ($EntradasCompradas * $PrecioGeneral) + ($EntradasCompradasNinos * $PrecioNinos);
        $igv = $SubTotal * 0.18;
        $Total = $SubTotal + $igv;

        echo "<div class='result'>";
        echo "<h3>Resumen de Compra</h3>";
        echo "<p><strong>Día seleccionado:</strong> " . ucfirst($DiaSemanal) . "</p>";
        echo "<p><strong>Entradas generales:</strong> " . $EntradasCompradas . " ($" . $PrecioGeneral . " c/u)</p>";
        echo "<p><strong>Entradas niños:</strong> " . $EntradasCompradasNinos . " ($" . $PrecioNinos . " c/u)</p>";
        echo "<hr>";
        echo "<p><strong>SubTotal:</strong> S/ " . number_format($SubTotal, 2) . "</p>";
        echo "<p><strong>IGV (18%):</strong> S/ " . number_format($igv, 2) . "</p>";
        echo "<p><strong>Total a pagar:</strong> S/ " . number_format($Total, 2) . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>