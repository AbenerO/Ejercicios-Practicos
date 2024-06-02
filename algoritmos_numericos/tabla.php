<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Amortización</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: right;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


    <!-- se define un formulario post para enviar los datos y se solicitan
         los tres valores que se piden en el ejercicio junto con el boton calcular -->
    <h1>Tabla de Amortización</h1>
    <form method="post" action="">
        <label for="monto">Monto del préstamo (Q):</label>
        <input type="number" id="monto" name="monto" step="0.01" required><br><br>
        <label for="plazo">Plazo en meses:</label>
        <input type="number" id="plazo" name="plazo" required><br><br>
        <label for="tasa">Tasa de interés mensu al (%):</label>
        <input type="number" id="tasa" name="tasa" step="0.01" required><br><br>
        <button type="submit">Calcular</button>
    </form>


        <!-- se obtienen los valores préstamo, plazo y tas, se calcula la tabla amortizacion
            y por ultimo se muestran en en la tabla de amortizacion-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $monto = floatval($_POST['monto']);
        $plazo = intval($_POST['plazo']);
        $tasa = floatval($_POST['tasa']) / 100;

        echo "<h2>Tabla de Amortización</h2>";
        echo "<table>";
        echo "<tr>
                <th>Periodo</th>
                <th>Saldo</th>
                <th>Interés</th>
                <th>Abono</th>
                <th>Pago</th>
              </tr>";

        $saldo = $monto;
        $pago_mensual = $monto / $plazo;

        for ($periodo = 1; $periodo <= $plazo; $periodo++) {
            $interes = $saldo * $tasa;
            $pago_total = $pago_mensual + $interes;
            $saldo -= $pago_mensual;

            echo "<tr>
                    <td>$periodo</td>
                    <td>Q" . number_format(max($saldo, 0), 2) . "</td>
                    <td>Q" . number_format($interes, 2) . "</td>
                    <td>Q" . number_format($pago_mensual, 2) . "</td>
                    <td>Q" . number_format($pago_total, 2) . "</td>
                  </tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
