<?php
//Declara uma função chamada exibirAlunos que recebe o parâmetro $alunos
// Esse parâmetro é esperado com um array com irformações dos alunos.
function exibirAlunos($alunos){

// Imprime na tela um titulo h2 e abre uma lista não ordenada ul.
echo "<h2> Lista de Alunos:</h2> <ul>";

//Inicia um loop foreach. que percorre cada item do array $alunos.
//Cada item é armazenado temporariamente na variavel $aluno
foreach($alunos as $aluno){
//Para cada aluno, imprime um item na lista (li).
//Exibe o nome do aluno e sua idade, formatados como "Nome - Idade anos".
echo "<li>{$aluno['nome']} - {$aluno['idade']} anos</li>";
}




}
?>