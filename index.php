<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Seleção</title>
  </head>
<body>
  

<div class="container" >
  <h2 align="center">SELEÇÃO DE ALUNOS!</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Dados Pessoais</a></li>
    <li><a data-toggle="tab" href="#menu1">Endereco</a></li>
    <li><a data-toggle="tab" href="#menu2">Curso e Concorrencia</a></li>
    <li><a data-toggle="tab" href="#menu3">Notas</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <form action="inserir.php" method="post">
        CPF <br><input type="text" name="cpf" id="cpf"><br>
        NOME <br><input type="text" name="nome" id="nome"><br>
        SOBRENOME <br><input type="text" name="sobrenome" id="sobrenome"><br>
        TELEFONE <br><input type="text" name="telefone" id="telefone"><br>
    </div>
    <div id="menu1" class="tab-pane fade">
        CIDADE <br><input type="text" name="cidade" id="cidade"><br>
        BAIRRO <br><input type="text" name="bairro" id="bairro"><br>
        RUA <br><input type="text" name="rua" id="rua"><br>
        NUMERO <br><input type="text" name="numero" id="numero"><br>
        
        
    </div>
    <div id="menu2" class="tab-pane fade">
        CURSO <br><select name="select_curso">
         <option>Selecione</option>
         <?php
             $resultado = $pdo->query("SELECT codigo, curso FROM curso");
             while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>                
                     <option value="<?php echo "{$linha['codigo']}";?>"><?php echo "{$linha['curso']}";?> </option> 
             <?php  
 }
 ?>     
        </select><br><br>

        CONCORRÊNCIA <br>
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
         
    </div>
    <div id="menu3" class="tab-pane fade">
    NOTA <br><input type="text" name="nota" id="nota"><br>
    <button type="submit">Cadastrar</button>
    </form>
    </div>
  </div>
</div>
</body>