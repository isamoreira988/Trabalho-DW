<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$agendamento= $_POST['agendamento'];



$sql = "INSERT INTO Funcionario(nome, cpf, email, telefone, agendamento ) VALUES ('?', '?', '?', '?')";

mysqli_query($conexao, $sql);

header("Location: index.php");
?>