<?php
require_once "../conexao/conexao.php";

$aluno = $_POST['aluno'];
$stmt = $conexao->prepare("SELECT * FROM `alunos_turmas` WHERE nome like '%$aluno%'");
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
echo utf8_encode($resultado['nome']);
