<?php
require_once "../conexao/conexao.php";
$codigo_uso = rand(10000,1000000);
$validade_carteira = $_POST['validade'];
$foto_aluno = $_POST['foto_aluno'];

$stmt = $conexa->prepare('codigo slq');
