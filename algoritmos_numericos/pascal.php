<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia de Binomios</title>
    <style>
        body {
            display: flex;
            padding: 5rem;
            align-items: center;
            background: #F0F0F0 !important;
        }

        .container {
            flex: 1;
            padding: 10px;
            background-color: #f2e2f2;
        }

        form {
            padding: 20px;
        }

        label,
        input {
            display: block;
            width: 95%;
            margin: 10px;
            padding: 5px;
        }

        div.resultado {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Potencia de binomios</h1>
        <form method="post" action="">
            <label for="potencia">Potencia del binomio (a+b)</label>
            <input type="number" id="potencia" name="potencia" placeholder="Número mayor a 1 y menor a 10" required><br>
            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
            function coeficiente_binomial($n, $k)
            {
                if ($k == 0 || $k == $n) {
                    return 1;
                }
                return coeficiente_binomial($n - 1, $k - 1) + coeficiente_binomial($n - 1, $k);
            }

            function binomio_recursivo($potencia)
            {
                $resultado = "";
                for ($i = 0; $i <= $potencia; $i++) {
                    $coeficiente = coeficiente_binomial($potencia, $i);
                    $termino = ($coeficiente == 1) ? "" : $coeficiente;
                    if ($potencia - $i > 0) {
                        $termino .= "a<sup>" . ($potencia - $i) . "</sup>";
                    }
                    if ($i > 0) {
                        $termino .= "b<sup>" . $i . "</sup>";
                    }
                    if ($i < $potencia) {
                        $termino .= " + ";
                    }
                    $resultado .= $termino;
                }
                return $resultado;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $potencia = intval($_POST['potencia']);
                if ($potencia > 0 && $potencia <= 20) {
                    echo "(a + b)<sup>" . $potencia . "</sup> = " . binomio_recursivo($potencia);
                } else {
                    echo "La potencia debe ser un número mayor a 1 y menor o igual a 20.";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
