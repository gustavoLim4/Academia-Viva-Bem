<?php 

require_once('class/alunos.php');
$id = $_GET['id'];

$aluno = new alunosClass();
$aluno -> idAluno = $id;
$aluno->desativar();
