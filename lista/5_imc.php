<?php
echo "<h2>calcular peso/altura</h2>";
function calcularIMC($peso, $altura) {
    return $peso / ($altura ** 2);
}

$peso = 70;
$altura = 1.75;

$imc = calcularIMC($peso, $altura);

echo "Peso: " . $peso . " kg<br>";
echo "Altura: " . $altura . " m<br>";
echo "IMC: " . number_format($imc, 2) . "<br>";

if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imc < 25) {
    echo "Classificação: Peso normal";
} elseif ($imc < 30) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}

?>