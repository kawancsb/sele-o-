<?php
require("conexao.php");
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$concorrencia = $_POST['concorrencia'];
$curso = $_POST['curso'];
$nota = $_POST['nota'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];


$res = $pdo-> prepare("INSERT INTO aluno(cpf, nome, sobrenome, telefone, concorrencia, curso, nota, rua, numero, bairro, cidade)
VALUES(:cpf, :nome, :sobrenome, :telefone, :concorrencia, :curso, :nota, :rua, :numero, :bairro, :cidade)");

$res->bindparam(":cpf", $cpf);
$res->bindparam(":nome", $nome);
$res->bindparam(":sobrenome", $sobrenome);
$res->bindparam(":telefone", $telefone);
$res->bindparam(":concorrencia", $concorrencia);
$res->bindparam(":curso", $curso);
$res->bindparam(":nota", $nota);
$res->bindparam(":rua", $rua);
$res->bindparam(":numero", $numero);
$res->bindparam(":bairro", $bairro);
$res->bindparam(":cidade", $cidade);
$res->execute();



?>