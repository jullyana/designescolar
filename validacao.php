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
        if($_GET[ 'act' ]=="gravar") {

$conn = mysql_connect("localhost","root","");

$banco = mysql_select_db("login");
$nomepost = addslashes($_POST['nome']);
$ussernamepost = addslashes($_POST['ussername']);
$emailpost = addslashes($_POST['email']);
$nomepost = addslashes($_POST['matricula']);
$senhapost = addslashes($_POST['senha']);
$senhapost2 = addslashes($_POST['senha2']);

if(empty($nomepost) || empty($ussernamepost) || empty($senhapost) || empty($emailpost)){
echo "Voce esqueceu algum campo em branco";
exit();
}
if($senha != $senha2){
echo "Senhas nao conferem";
exit();
}
if(filter_var($emailpost, FILTER_VALIDATE_EMAIL)){

  mysql_query("INSERT INTO Sis_login (id, nome, ussername, senha, email)
  VALUES (NULL, '$nomepost', '$ussernamepost', '$senhapost', '$emailpost')");
  print "<center>Usuário criado com sucesso!</center>";
}else{
echo "Email invalido";
}
} else {
?>

<form name="newuser" method="post" action="?act=gravar">

Nome: <input type="text" name="nome" maxlength=40><BR>
Usser Name: <input type="text" name="ussername" maxlength=20><BR>
Email: <input type="text" name="email" ><BR>
Senha: <input type="password" name="senha" maxlength=20>
<br>
Repita: 
<input type="password" name="senha2" maxlength=20>
<BR>
<BR>

<input type="submit" value="Enviar!">

</form>
        

<?

}

?>
  
    </body>
</html>
