 <?php 
//echo htmlspecialchars_decode(($_POST['nome'])); 
//echo htmlspecialchars_decode($_POST['saldo']); 

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

$email = $_POST['email'];
$phone = $_POST['phone'];
$login = $_POST['user'];
$senha = $_POST['pass2'];


/*function getData(){
$datatimezone = new DateTimeZone('Brazil/Northwest');
$data = new DateTime();
$data->setTime($datatimezone);
	return $data->format('Y,m,d H,i,s');
}
*/
$now = date_create('now')->format('Y-m-d H:i:s');
$db = 'nexti';
$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, $db);
if (!$conexao) {
    echo "Erro ao conectar com a base de dados." . PHP_EOL;
    exit();
}
$query_select = "SELECT cpf FROM cliente WHERE cpf = '$cpf'";
$query_select2 = "select login from cliente where login = '$login'";
$query_select3 = "select email from cliente where email = '$email'";


$dados = mysqli_query($conexao, $query_select) or die(mysqli_error($conexao));
$dados2 = mysqli_query($conexao, $query_select2) or die(mysqli_error($conexao));
$dados3 = mysqli_query($conexao, $query_select3) or die(mysqli_error($conexao));
$verificar = 0;

	
while($linha = mysqli_fetch_assoc($dados)){
	$_cpf = $linha['cpf'];
	
	if($_cpf == $cpf){
		$verificar= 1;
		
		}
}
while($linha2 = mysqli_fetch_assoc($dados2)){
	$_login = $linha2['login'];
	if($_login == $login){
		$verificar =2;
	}
}
while($linha3 = mysqli_fetch_assoc($dados3)){
	$_email = $linha3['email'];
	if($_email == $email){
		$verificar =3;
	}
}
if($verificar == 1){
	header("location: alreadyin.php");
	exit();
}elseif($verificar == 2){
	header("location: alreadyinL.php");
 	exit();
}elseif($verificar == 3){
	header("location: alreadyinE.php");
 	exit();
}else{
	$sql_inclu = "INSERT INTO cliente(nome, cpf, email, phone, login, pw) VALUES ('$nome', '$cpf', '$email','$phone','$login', '$senha')";
	$exe_inclu = mysqli_query($conexao,$sql_inclu) or die (mysqli_error($conexao));



//Se der certo continua
header("location: sucess.php");


//Disconnect
mysqli_close($conexao);
}

	

?>
