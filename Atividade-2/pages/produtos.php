<?php
//2. Crie um array associativo para armazenar informações de um produto:
// a-Nome do produto, preço, quantidade em estoque.
// b-Adicione 05 produtos e exiba as informações formatadas da seguinte forma:
// Produto: TV
//Preço: R$ 5.600,00
//Qtd: 08
//c-Atualize o preço de todos os produto e exiba todos eles novamente, simulando um desconto de 10% em todos os produtos.

$moveis = ["nome " => " Tv "," preco " => " R$ 3000,00 "," estoque " => " 2000 "] ;

foreach ($moveis as $itens => $resposta) {
    echo $itens . "=" . $resposta;
}
