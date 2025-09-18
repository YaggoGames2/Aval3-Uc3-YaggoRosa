<?php
//1. Crie um array com os números de 1 a 10 e faça o seguinte:
//a-Exiba todos os números do array.
//b-Calcule e exiba a soma de todos os números.
//c-Inverta a ordem dos elementos no array e exiba o resultado.

$numeros = [1,2,3,4,5,6,7,8,9,10];
 echo "<h3> Números do Array <h3>";
foreach ($numeros as $numero) {
    echo  $numero . " <br> <br> ";
}

$resultado = array_sum($numeros);
echo "O resultado da soma é: " . $resultado . "<br><br>" ;

rsort($numeros) . "<br>";

echo "<h3> Números do Array em ordem decrescente <h3>";
foreach($numeros as $numeroIverter){
    echo $numeroIverter . "<br>";
}

// range serve para gerar o array automático
//implode transforma um string separados por espaço
?>
