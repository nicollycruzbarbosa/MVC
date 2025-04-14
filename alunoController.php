<?php
// Incluir o arquivo aluno.php que contem a classe Aluno.
// Incluir o alunosView.php, que contem a funcao exibirAlunos().
require_once 'aluno.php';
require_once 'alunosView.php';

// Declaração da classe alunoController.
// Essa classe é responsavel pela comunicação entre o aluno.php e o alunosView.php.

class alunoController{
// Criar uma propriedade privada chamada $model.
// Ela sera usada para armazenar uma instancia da classe Aluno.

private $model;

// Criar um método constructor da classe, ele é chamado automaticamente quando um objeto for criado.

public function __construct(){
// Criar uma nova instancia da classe aluno, e armazenar na propriedade privada $model.
$this->model = new Aluno();
}

// Método publico chamado listar.
// Ele serve para buscar a lista de alunos e passar para o view
public function listar(){
    // chama o método listarAlunos() e armazena na variavel $alunos.
    $alunos = $this->model->listarAlunos();
    // chama a funcao exibirAlunos() e envia a lista para mostrar no navegador.
    exibirAlunos($alunos);
}
}

// execução do código
// aqui fora da classe é criado um objeto do tipo AlunoController.
$controler = new alunoController();
// Após cirar o Objeto, é chamado o metodo listar().
$controler->listar();
?>