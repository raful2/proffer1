<?php 

$prod_name = $_POST['prod'];
$proprietario = $_POST['owner'];
$valor = $_POST['valor'];
$cat = $_POST['category'];

$con = mysqli_connect("localhost", "root","");
$sel_db = mysqli_select_db($con,"nexti");

if(!$con){
	echo "Erro ao conectar ao banco";
	exit();
}else{
	$query_select = "SELECT cpf FROM cliente WHERE cpf = '$proprietario'";
	$sql_query = mysqli_query($con,$query_select);
	$linha = mysqli_fetch_row($sql_query);
	if($linha > 0){
		$insert_query = "INSERT INTO prod (id_cliente,nome,valor,category) VALUES ('$proprietario','$prod_name','$valor','$cat')";
		$query_exc = mysqli_query($con,$insert_query) or die("ERRO");
		echo "produto registrado";
	}else{
		header("location: palreadyin.php");
		exit();
	}
}



?>