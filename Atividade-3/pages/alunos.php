<?php
//3. Crie um array associativo com informações de 3 alunos (nome, idade e notaFinal). Depois:
 
//a-Adicione 10 alunos e exiba as informações de cada aluno da seguinte forma:
    //nome: Juca
    //idade: 27 anos
    //notaFinal: 8.5
//b-Calcule e exiba a média das notas de todos os alunos.
     

$alunos = [
    // os 3 alunos
    ["nome" => "Yaggo", "idade" => 17, "notaFinal" => 9], 
    ["nome" => "Sophia", "idade" => 18, "notaFinal" => 10],
    ["nome" => "Felipe", "idade" => 18, "notaFinal" => 7],
//os 10 alunos
    ["nome" => "Ana", "idade" => 18, "notaFinal" => 6], 
    ["nome" => "Camila", "idade" => 19, "notaFinal" => 7], 
    ["nome" => "Fernanda", "idade" => 21, "notaFinal" => 8], 
    ["nome" => "Eduardo", "idade" => 17, "notaFinal" => 9],
    ["nome" => "Thayná", "idade" => 18, "notaFinal" => 2],
    ["nome" => "Luci", "idade" => 19, "notaFinal" => 8],
    ["nome" => "Yuri", "idade" => 20, "notaFinal" => 6],
    ["nome" => "Miguel", "idade" => 17, "notaFinal" => 7],
    ["nome" => "Bianca", "idade" => 16, "notaFinal" => 9],
    ["nome" => "André", "idade" => 18, "notaFinal" => 8]
];
 
echo "Lista de Alunos:" . "<br>";
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno['nome'] . ", ";
    echo "Idade: " . $aluno['idade'] . "<br>";
    echo "Nota Final: " . $aluno['notaFinal'] . "<p>";
}
 
$contaNotas = 0;
foreach ($alunos as $aluno) {
    $contaNotas += $aluno['notaFinal'];
}
 
$media = $contaNotas / count($alunos) ;
echo "Média das notas: " . number_format($media, 2, "," ) ;
?>
