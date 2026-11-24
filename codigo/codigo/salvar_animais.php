<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$idade= $_POST['idade'];
$agendamento $_POST['agendamento'];



$sql = "INSERT INTO Animais (nome, especie, raca, idade, agendamento ) VALUES ('?', '?', '?', '?', '?')";

mysqli_query($conexao, $sql);

header("Location: index.php");
?>