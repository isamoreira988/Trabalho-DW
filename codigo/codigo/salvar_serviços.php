<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$agendamento= $_POST['agendamento'];



$sql = "INSERT INTO Serviços(nome, descricao, preco, agendamento ) VALUES ('?', '?', '?', '?')";

mysqli_query($conexao, $sql);

header("Location: index.php");
?>