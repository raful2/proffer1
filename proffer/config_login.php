<?php

$host = "localhost"; //Servidor do mysql
$user = "root"; //Usuario do banco de dados
$senha = ""; //senha do banco de dados
$nome_site = "proffer"; //Nome do site
$email = "raful@aluno.fapce.edu.br"; //E-mail do administrador
$site = "www.xrspxmissao.com"; //Seu site n se esuqece de bota o http://
$db = 'nexti';
$conexao = mysqli_connect("localhost", "root", "", $db);
mysqli_select_db($conexao, $db);
mysql_connect($host, $user, $senha) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());

?>
