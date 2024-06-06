<?php
// Criar um array de produtos
$produtos = ["maça" => 2.99, "banana" => 3.89, "uva" => 2.75 ];
// Exibir produtos
echo "Lista de produtos:\n";
foreach ($produtos as $produto => $preco) {
    echo "$produto custa R$ " . number_format($preco, 2, ',', '.') . "\n";
}
?>