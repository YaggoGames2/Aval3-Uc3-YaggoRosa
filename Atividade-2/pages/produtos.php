<?php
//2. Crie um array associativo para armazenar informações de um produto:
// a-Nome do produto, preço, quantidade em estoque.
// b-Adicione 05 produtos e exiba as informações formatadas da seguinte forma:
// Produto: TV
//Preço: R$ 5.600,00
//Qtd: 08
//c-Atualize o preço de todos os produto e exiba todos eles novamente, simulando um desconto de 10% em todos os produtos.

$moveis = [[ "nome" => "TV", "preco" => 5600.00, "quantidade" => 8], ["nome" => "Computador","preco" => 3500.00, "quantidade" => 5], [ "nome" => "Sofá","preco" => 2800.00,"quantidade" => 10],["nome" => "Geladeira","preco" => 4200.00,"quantidade" => 3], ["nome" => "Cabeceira","preco" => 800.00,"quantidade" => 12 ]];
 

echo "<h3>Lista de Produtos:</h3>";
foreach ($moveis as $movel) {
    echo "Produto: {$movel['nome']} <br>";
    echo "Preço: R$ " . number_format($movel['preco'], 2, ",", ".") . "<br>";
    echo "Qtd: {$movel['quantidade']} <br><br>";
}
 

echo "<h3>Lista de Produtos com 10% de desconto:</h3>";
foreach ($moveis as $movel) {
    $resultado = $movel['preco'] * 0.90; // desconto de 10%
    echo "Produto: {$movel['nome']} <br>";
    echo "Preço: R$ " . number_format($resultado, 2, ",", ".") . "<br>";
    echo "Qtd: {$movel['quantidade']} <br><br>";
}
?>