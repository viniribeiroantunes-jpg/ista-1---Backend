<?php

$desconto = 0.10;
$total = 0;
$preco = 250;

echo "<h2>✨ Aplicação de desconto de compra ✨<br></h2>";

echo "Você está comprando 6 caixas de chocolate, com o valor de 50,00 reais cada.🍫<br>";

if ($preco>=200){
     $total = $preco - ($preco * $desconto);

     //Exibir
echo "<h3>Aplicando o desconto:</h3> ";

echo "<h4>O valor é $total</h4> ";
}

?>