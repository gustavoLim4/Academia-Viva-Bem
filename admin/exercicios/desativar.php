<?php 

require_once('class/exercicios.php');
$id = $_GET['id'];

$exercicio = new ExerciciosClass();
$exercicio-> idExercicio = $id;
$exercicio->DESATIVA();