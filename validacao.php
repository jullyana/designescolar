<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
// Obtemos os dados do formulário
     if(isset($_POST) && !empty($_POST)) {
       $nome      = $_POST["nome"];//aqui pega os dados que foram preenchidos la no formulário com o ID nome.
       $sobrenome = $_POST["sobrenome"];//aqui pega os dados que foram preenchidos la no formulário com o ID sobrenome.
       $email     = $_POST["email"];//aqui pega os dados que foram preenchidos la no formulário com o ID email.
       $Matricula = $_POST["Matricula"];;//aqui pega os dados que foram preenchidos la no formulário com o ID matricula.
       $Senha     = $_POST["Senha"];;//aqui pega os dados que foram preenchidos la no formulário com o ID senha.
       $repetir_Senha = $_POST["repetir_Senha"];;//aqui pega os dados que foram preenchidos la no formulário com o ID repetir_senha.
       $erro = 0;
       
       if (ereg ("([a-z]{5}))", $nome,$var)) {
        echo "Digitar nome corretamente.<br>";
       } else {
          echo "Formato do nome inválido: $nome";
       }
              
       if(strlen($sobrenome)<5)
       {echo "o nome deve possuir no minimo 5 caracteres.<br>";$erro=1;}
       
       if(strlen($email)<8 || strstr($email,'@')==FALSE)
       {echo "Por favor digitar um email valido.<br>";$erro=1;}
       
       if(strlen($Matricula)<11)
       {echo "A matricula deve possuir no minimo 11 caracteres.<br>";$erro=1;}
       
       if(strlen($Senha)<6)
       {echo "A senha deve possuir no minimo 6 caracteres.<br>";$erro=1;}
       
       if(strlen($repetir_Senha)<6)
       {echo "A senha deve ser igual.<br>";$erro=1;}
       
       //verifica se todos os campos foram digitados corretamente
       
       if($erro==0)
       {echo "todos os dados foram digitados corretamente!";}
       
     }
       
       ?>

<?



?>
  
    </body>
</html>
