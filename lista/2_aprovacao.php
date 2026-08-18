<?php

// Dados do aluno
$media = 7;
$faltas = 10;

// Verificação da aprovação
echo "<h2>Resultado do aluno</h2>";

if ($media >= 6 && $faltas <= 15) {
    echo "Aluno aprovado!";
} else {
    echo "Aluno reprovado!";
}

?>

