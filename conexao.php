<?php
try
{
$pdo = new PDO("mysql:dbname=selecao;host=localhost","root","");
}
catch (PDOException $e) {
    echo "Erro com banco de dados: ".$e->getMessage();
}
catch(Exeception $e)
{
    echo "Erro generico: ".$e->getMessage();;
}


?>