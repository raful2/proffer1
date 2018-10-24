<?php

$login = $_POST['login'];
$senha = $_POST['pass'];

/* Verifica se existe usuario, o segredo ta aqui quando ele procupa uma 
linha q contenha o login e a senha digitada */

$db = 'nexti';
$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, $db);
if (!$conexao) {
    echo "Erro ao conectar com a base de dados." . PHP_EOL;
    exit();
}
$sql_logar = "SELECT * FROM cliente WHERE login = '$login' AND pw = '$senha'";
$exe_logar = mysqli_query($conexao, $sql_logar) or die (mysqli_error($conexao));
$fet_logar = mysqli_fetch_assoc($exe_logar);
$num_logar = mysqli_num_rows($exe_logar);

//Verifica se n existe uma linha com o logiae a senha digitado
if ($num_logar == 0){
   echo "Login ou senha invalida.";
   echo "<br><a href='javascript:window.history.go(-1)'>Clique aqui para voltar.</a>";   
}elseif($fet_logar['login'] == "" || $fet_logar['pw']==""){
	echo "Digite algo nos campos login e senha";
	echo "<br><a href='javascript:window.history.go(-1)'>Clique aqui para voltar.</a>";
}else{
   //Cria a sess�o e manda pra pagina principal.php
   session_start();
   $_SESSION['login'] = $login;
   $_SESSION['senha'] = $senha;
   header("Location:index.php");
}
?>