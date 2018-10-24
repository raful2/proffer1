<!doctype html>
<html lang="en">
  <head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Proferta - Registro</title>
  </head>
  <body background="img/reg_bg.jpg">
  <script>
		function validarSenha(pass, pass2)
{
    var senha1 = document.getElementById(pass).value;
    var senha2 = document.getElementById(pass2).value;
		
    if (senha1 != "" && senha2 != "" && senha1 === senha2)
    {
    	alert('senha iguais');
    }
    else
    {
      	alert('senhas diferentes');
    }
}
	</script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <div class="logo" align="center"> <img src="img/LOGO.png" width="403" style="align-content: center" ></div>
<div>
 <div align="center" ><div>
 <div align="center" ><ul class="navbar">
  <li role="presentation" class="active" ><a href="index.html" STYLE="background-color: aliceblue"> <font color="#000000" >INICIO</font></a></li>
  <li role="presentation" class="active" ><a href="reg.php">  <font  >REGISTRAR CLIENTE</font> </a></li>
  <li role="presentation" class="active" ><a href="PROD_reg.php" >  <font>REGISTRAR PRODUTO</font> </a></li>
 
   <li role="presentation" class="active"><a href="about.php">  QUEM SOMOS
</a>
 </li>
  
</ul><div><div>
<form action="login.php" method="post">
 <div></div>
</form>

  <div style="background-color: darkcyan"><font size="+5" style="font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana,' sans-serif'">
  <p align="center">RESULTADO DO CADASTRO</p></font></div>

<div id="form" class="container-fluid"  style="position: relative;
	text-transform: uppercase; text-size: 30; display: inline-block; background-image: url()" align="center" >
	Email JÁ CADASTRADO NA NOSSA BASE DE DADOS
	
</div></div>
<div><a href="index.html"><button>Voltar para tela Inicial.</button></a></div>
<div><a href="reg.php"><button href="reg.php" value="Inicio">Voltar para tela de Cadastro.</button></a></div>
	
	









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html>

