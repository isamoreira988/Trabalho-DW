<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco= $_POST['endereco'];
$agendamento $_POST['agendamento'];



$sql = "INSERT INTO Cliente(nome, cpf, telefone, endereco, agendamento ) VALUES ('?', '?', '?', '?', '?')";

mysqli_query($conexao, $sql);

header("Location: form_cliente.php");
?>