<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC Simples</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>

    <form method="post">
        Peso (kg): <input type="number" name="peso"
        step="0.1" required><br><br>
        Altura (m): <input type="number" name="altura"
        step="0.01" required><br><br>
        <input type="submit" value="Calcule seu IMC">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        //calculo do IMC
        $imc = $peso / ($altura * $altura); //fórmula do IMC:
        //peso / (altura * altura)
        $imc = number_format(num: $imc, decimals: 2);
        echo "<h3>Cálculo do IMC</h3>";
        echo "Seu IMC: $imc";
        
        echo "<br>";
    

    if ($imc <18.5) {
        echo "<p>Abaixo do peso</p>";
    } elseif ($imc <25) {
        echo "<p>Peso Normal</p>";
    } elseif ($imc <30) {
        echo "<p>Sobrepeso</p>";
    } else {
        echo "<p>Obesidade</p>";
    }
    }
    ?>