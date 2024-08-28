<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post"></form>
        <h1>Cálculo da área de um triângulo</h1>
        <form method="post" action="">
            <label for="base">BASE:</label>
            <input type="number" id="base" name="base" step= "0.01" required>

            <label for="altura">ALTURA:</label>
            <input type="number" id="altura" name="altura" step= "0.01" required>

            <button type="submit">CALCULAR</button>
  
        </form>

    </div>

    <?php

    function calcularAreaTriang($base, $altura) {
        return ($base * $altura) / 2;
    }

    $base = '';
    $altura = '';
    $resposta = '';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $base = isset($_POST['BASE']) ? (float)$_POST['base'] : 0;
        $altura = isset($_POST['altura']) ? (float)$_POST['altura'] : 0;

        $area = calcularAreaTriang($base,  $altura);

        $valorLimite = 100;

        if ($base === false || $altura === false || $base <= 0 || $altura <= 0) {
            echo "<h1>Algo deu errado!</h1>";

            echo "<p>Coloque valores válidos!</p>";
        }

        $area = 0.5 * $base * $altura;

        if ($area > $valorLimite) {
            echo "<p>Então a Área do triângulo é: </p>" . number_format($area, 2);
            echo "<p> $$resposta </p>";
        }

    }else{
        echo "Método deu inválido";
    }

    ?>


</body>
</html>