<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Cadastro de Usuario</title>
</head>
<body>
    <div>
        <div class="row">
            <div class="col-sm12 text-center">
                <h1>SELEÇÃO DE ALUNOS</h1>
                       </div> 
    </div>
    <div align="center">
    <button class="btn btn-success">Dados pessoais</button>
    <button class="btn btn-success">Indereço</button>
    <button class="btn btn-success">Curso e Concorrencia</button>
    <button class="btn btn-success">nota</button></div>
  
    <form action="inserir.php" method="post" align="center">
       
        CPF: <input type="text" name="cpf" id="cpf"><br>
        NOME: <input type="text" name="nome" id="nome"><br>
        SOBRENOME: <input type="text" name="sobrenome" id="sobrenome"><br>
        TELEFONE: <input type="text" name="telefone" id="telefone"><br>
        CONCORRÊNCIA:
       <select name="select_concorrencia">
        <option>Selecione</option>
        <?php
            $resultado = $pdo->query("SELECT codigo, descricao FROM CONCORRENCIA");
            while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>                
                    <option value="<?php echo "{$linha['codigo']}";?>"><?php echo "{$linha['descricao']}";?> </option> 

                
            <?php  
}
?>
        
       </select><br><br>
        CURSO: <input type="text" name="curso" id="curso"><br>
        NOTA: <input type="text" name="nota" id="nota"><br>
        RUA: <input type="text" name="rua" id="rua"><br>
        NUMERO: <input type="text" name="numero" id="numero"><br>
        BAIRRO: <input type="text" name="bairro" id="bairro"><br>
        CIDADE: <input type="text" name="cidade" id="cidade"><br>
        <button type="submit">Cadastrar</button>
</form>
</body>
</html>


















