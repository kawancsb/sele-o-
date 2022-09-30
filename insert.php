<?php
require("conexao.php");
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];

$res = $pdo-> prepare("INSERT INTO concorrencia(codigo, descricao)
VALUES(:c, :d)");

$res->bindparam(":c", $codigo);
$res->bindparam(":d", $descricao);
$res->execute();



?>