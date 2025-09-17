<?php
//1. Crie um array com os números de 1 a 10 e faça o seguinte:
//a-Exiba todos os números do array.
//b-Calcule e exiba a soma de todos os números.
//c-Inverta a ordem dos elementos no array e exiba o resultado.

$numeros = [1,2,3,4,5,6,7,8,9,10];


foreach ($numeros as $numero) {
    echo  $numero . "<br>";
}

$resultado = array_sum($numeros);
echo "O resultado da soma é: " . $resultado . "<br>" ;

rsort($numeros);

foreach($numeros as $numeroIverter){
    echo $numeroIverter . "<br>";
}

?>
