<?php
//3. Crie um array associativo com informações de 3 alunos (nome, idade e notaFinal). Depois:
 
//a-Adicione 10 alunos e exiba as informações de cada aluno da seguinte forma:
    //nome: Juca
    //idade: 27 anos
    //notaFinal: 8.5
//b-Calcule e exiba a média das notas de todos os alunos.
     
$alunos = [["nome" => "Yaggo ", "idade " => 17, "notaFinal " => 9], ["nome" => "Sophia ", "idade " => 18, "notaFinal " => 10], ["nome" => "Felipe ", "idade " => 18, "notaFinal " => 7]];

echo "<h3> Os 3 alunos <h3>";

foreach ($alunos as $aluno) {
    echo "nome: {$aluno['nome']} <br>";
    echo "idade: {$aluno['idade']} <br>";
    echo "notaFinal: {$aluno['notaFinal']} <br><br>";
}

array_splice($alunos, count($alunos),  0,['nome' => 'Camila', 'idade' => 17, 'nota' => 10] );


?>